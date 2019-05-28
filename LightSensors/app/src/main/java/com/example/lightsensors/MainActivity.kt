package com.example.lightsensors

import android.graphics.Color
import android.hardware.Sensor
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.hardware.Sensor.TYPE_LIGHT
import android.hardware.SensorEvent
import android.hardware.SensorEventListener
import android.hardware.SensorManager
import android.provider.Settings
import android.view.View
import android.widget.*
import com.github.kittinunf.fuel.httpGet
import com.github.kittinunf.fuel.json.responseJson
import org.jetbrains.anko.act
import java.util.*
import android.view.WindowManager




class MainActivity : AppCompatActivity() {

    companion object {
        val BASE_URI = "http://yourfrog12.usermd.net/toilet/web/"
    }
    val timer  = Timer()
    val timerStatus  = Timer()
    var lightPower = 0
    var previousLightPower = -1

    val toiletID: String by lazy {
        Settings.Secure.getString(baseContext.getContentResolver(), Settings.Secure.ANDROID_ID)
    }

    public override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val activity = this

        timerStatus.scheduleAtFixedRate(object: TimerTask() {
            override fun run() {

                activity.runOnUiThread {
                    activity.refreshScreen()
                }
            }
        }, 0, 5000)


        activity.findViewById<Button>(R.id.reservationButton).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "register-by-hash/" + activity.toiletID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        refreshScreen()
                    }
                }
            }
        }

        activity.findViewById<Button>(R.id.buttonResignation).setOnClickListener {
            runOnUiThread {
                val uri = MainActivity.BASE_URI + "unregister-by-hash/" + activity.toiletID
                uri.httpGet().responseJson { request, response, result ->

                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z rezygnacją z kolejki", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        refreshScreen()
                    }
                }
            }
        }

        getWindow().addFlags(WindowManager.LayoutParams.FLAG_KEEP_SCREEN_ON);
    }

    private fun refreshScreen()
    {
        val activity = this
        var url = MainActivity.BASE_URI + "details-by-hash/" + activity.toiletID

        url.httpGet().responseJson { request, response, result ->
            activity.runOnUiThread {
                if (response.statusCode != 200) {
                    Toast.makeText(baseContext, "Problem z pobraniem statusu", Toast.LENGTH_SHORT).show()
                } else {
                    val reservations = result.get().obj().getJSONArray("reservations")
                    val view = findViewById<RelativeLayout>(R.id.RelativeLayout01)
                    val infoText = findViewById<TextView>(R.id.infoText)
                    val queueInfoText = findViewById<TextView>(R.id.queue_info)
                    val reservationButton = findViewById<Button>(R.id.reservationButton)
                    var buttonResignation = findViewById<TextView>(R.id.buttonResignation)

                    if (reservations.length() == 0) {
                        // Nikt nie zapisał się do toalety
                        view.setBackgroundColor(getResources().getColor(R.color.white))
                        infoText.visibility = View.GONE
                        queueInfoText.visibility = View.GONE
                        buttonResignation.visibility = View.GONE
                        reservationButton.visibility = View.VISIBLE
                    } else {
                        var inQueue = false

                        for(i in 0 .. reservations.length() - 1) {
                            val reservation = reservations.getJSONObject(i)

                            if( reservation.getString("client_hash").equals(activity.toiletID) ) {
                                inQueue = true
                            }
                        }

                        if( inQueue ) {
                            // W toalecie został kliknięty guzik "zajmij"
                            view.setBackgroundColor(getResources().getColor(R.color.red))
                            infoText.visibility = View.VISIBLE
                            queueInfoText.visibility = View.VISIBLE
                            queueInfoText.text = "Aktualnie w kolejce znajduje się " + reservations.length() + " osób. Przewidziany czas zwolnienia to " +  (reservations.length() * 10) + " minut"
                            reservationButton.visibility = View.GONE
                            buttonResignation.visibility = View.VISIBLE
                        } else {
                            // Nikt nie kliknął w toalecie jednak jest kolejka
                            view.setBackgroundColor(getResources().getColor(R.color.orange))
                            infoText.visibility = View.VISIBLE
                            queueInfoText.visibility = View.VISIBLE
                            queueInfoText.text = "Aktualnie w kolejce znajduje się " + reservations.length() + " osób. Przewidziany czas zwolnienia to " +  (reservations.length() * 10) + " minut"
                            reservationButton.visibility = View.GONE
                            buttonResignation.visibility = View.GONE
                        }
                    }
                }
            }
        }
    }
}
