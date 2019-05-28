package com.example.toiletclient

import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.provider.Settings
import android.view.View
import com.github.kittinunf.fuel.httpGet
import com.github.kittinunf.fuel.json.responseJson
import android.os.VibrationEffect
import android.os.Build
import android.content.Context.VIBRATOR_SERVICE
import android.os.Vibrator
import android.widget.*
import java.util.*


class ToiletDetails : AppCompatActivity() {

    val timer  = Timer()
    val toiletID: String by lazy {
        intent.getStringExtra("toiletID")
    }

    val androidID: String by lazy {
        Settings.Secure.getString(baseContext.getContentResolver(), Settings.Secure.ANDROID_ID)
    }

    val spinner: FrameLayout by lazy {
        findViewById<FrameLayout>(R.id.progressBarHolder);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_toilet_details)

        val activity = this
        spinner.visibility = View.VISIBLE

        runOnUiThread {
            activity.reloadDetails(true)
        }

        timer.scheduleAtFixedRate(object: TimerTask() {
            override fun run() {
                runOnUiThread(object : Runnable {
                    override fun run() {
                        activity.reloadDetails()
                    }
                })
            }
        }, 5000, 5000)

        activity.findViewById<Button>(R.id.reservationButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "register/" + toiletID + "/andoid/" + androidID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        runOnUiThread {
                            spinner.visibility = View.VISIBLE
                            reloadDetails(true)
                        }
                    }
                }
            }
        }

        activity.findViewById<Button>(R.id.goOutButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "unregister/" + toiletID + "/andoid/" + androidID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        runOnUiThread {
                            spinner.visibility = View.VISIBLE
                            reloadDetails(true)
                        }
                    }
                }
            }
        }

        activity.findViewById<Button>(R.id.dirtButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "dirt/" + toiletID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        runOnUiThread {
                            spinner.visibility = View.VISIBLE
                            reloadDetails(true)
                        }
                    }
                }
            }
        }

        activity.findViewById<Button>(R.id.cleanButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "clean/" + toiletID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        runOnUiThread {
                            spinner.visibility = View.VISIBLE
                            reloadDetails(true)
                        }
                    }
                }
            }
        }

        activity.findViewById<Button>(R.id.acceptButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "accept/" + toiletID + "/andoid/" + androidID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        runOnUiThread {
                            spinner.visibility = View.VISIBLE
                            reloadDetails(true)
                        }
                    }
                }
            }
        }
    }

    override fun onDestroy() {
        super.onDestroy()

        timer.cancel()
    }

    private fun reloadDetails(spinnerChange: Boolean = false)
    {
        runOnUiThread {
            val uri = MainActivity.BASE_URI + "details/" + toiletID

            val activity = this
            uri.httpGet().responseJson { request, response, result ->
                runOnUiThread {
                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z pobraniem listy ", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        val details = result.get().obj().getJSONObject("detail")
                        val reservations = result.get().obj().getJSONArray("reservations")

                        activity.title = details.getString("name")

                        if (reservations.length() == 0) {
                            activity.findViewById<TextView>(R.id.queue).text = "Brak osób w kolejce"
                        } else {
                            activity.findViewById<TextView>(R.id.queue).text =
                                "W kolejce " + reservations.length() + " świnki"
                        }

                        activity.findViewById<TextView>(R.id.pigText).text = "Toaleta jest " + details.getString("stan")
                        if (details.getString("stan").equals("brudna")) {
                            activity.findViewById<ImageView>(R.id.pigImage).setImageResource(R.drawable.pig)

                            activity.findViewById<Button>(R.id.dirtButton).visibility = View.GONE
                            activity.findViewById<Button>(R.id.cleanButton).visibility = View.VISIBLE
                        } else {
                            activity.findViewById<ImageView>(R.id.pigImage).setImageResource(R.drawable.pig_clean)

                            activity.findViewById<Button>(R.id.dirtButton).visibility = View.VISIBLE
                            activity.findViewById<Button>(R.id.cleanButton).visibility = View.GONE
                        }

                        activity.findViewById<Button>(R.id.acceptButton).visibility = View.GONE

                        var inQueue = false
                        for (i in 0..reservations.length() - 1) {
                            val reservation = reservations.getJSONObject(i)

                            if (reservation.getString("client_hash").equals(androidID)) {
                                inQueue = true

                                if (i == 0) {
                                    activity.findViewById<TextView>(R.id.queue).text = "Twoja kolej"

                                    if (reservation.getString("date_of_accept").equals("null") ) {
                                        vibrate()
                                        activity.findViewById<Button>(R.id.acceptButton).visibility = View.VISIBLE

                                    }
                                }
                            }
                        }

                        if (inQueue) {
                            activity.findViewById<Button>(R.id.reservationButton).visibility = View.GONE
                            activity.findViewById<Button>(R.id.goOutButton).visibility = View.VISIBLE
                        } else {
                            activity.findViewById<Button>(R.id.reservationButton).visibility = View.VISIBLE
                            activity.findViewById<Button>(R.id.goOutButton).visibility = View.GONE
                        }
                    }

                    if (spinnerChange) {
                        spinner.visibility = View.GONE
                    }
                }
            }
        }
    }

    private fun vibrate()
    {

        val v = getSystemService(VIBRATOR_SERVICE) as Vibrator

        // Vibrate for 500 milliseconds
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            v.vibrate(VibrationEffect.createOneShot(500, VibrationEffect.DEFAULT_AMPLITUDE))
        } else {
            //deprecated in API 26
            v.vibrate(2000)
        }
    }
}
