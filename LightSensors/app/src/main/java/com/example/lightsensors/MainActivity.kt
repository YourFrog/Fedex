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


class MainActivity : AppCompatActivity() {

    companion object {
        val BASE_URI = "http://192.168.0.157/Toilet/web/app_dev.php/"
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

        val mySensorManager = getSystemService(SENSOR_SERVICE) as SensorManager

        val lightSensor = mySensorManager.getDefaultSensor(TYPE_LIGHT)
        if (lightSensor != null) {
            mySensorManager.registerListener(
                lightSensorListener,
                lightSensor,
                SensorManager.SENSOR_DELAY_NORMAL
            )

        }

        val activity = this
        timer.scheduleAtFixedRate(object: TimerTask() {
            override fun run() {

                if( activity.lightPower == activity.previousLightPower ) {
                    return@run
                }

                var url = MainActivity.BASE_URI + "light/toiletHash/" + activity.toiletID + "/light/" + activity.lightPower

                url.httpGet().responseJson { request, response, result ->
                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z zapisaniem", Toast.LENGTH_SHORT).show()
                        }
                    } else {
                        activity.previousLightPower = activity.lightPower
                    }
                }
            }
        }, 0, 10000)

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
                    val reservationButton = findViewById<Button>(R.id.reservationButton)
                    val doItImage = findViewById<ImageButton>(R.id.doItImage)

                    if (reservations.length() == 0) {
                        // Nikt nie zapisał się do toalety
                        view.setBackgroundColor(getResources().getColor(R.color.white))
                        infoText.visibility = View.GONE
                        reservationButton.visibility = View.VISIBLE
                        doItImage.visibility = View.GONE
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
                            view.setBackgroundColor(getResources().getColor(R.color.black))
                            infoText.visibility = View.GONE
                            reservationButton.visibility = View.GONE
                            doItImage.visibility = View.VISIBLE
                            doItImage.setBackgroundColor(getResources().getColor(R.color.black))
                        } else {
                            // Nikt nie kliknął w toalecie jednak jest kolejka
                            view.setBackgroundColor(getResources().getColor(R.color.orange))
                            infoText.visibility = View.VISIBLE
                            reservationButton.visibility = View.GONE
                            doItImage.visibility = View.GONE
                        }
                    }
                }
            }
        }
    }

    class MySensorLight(val activity: MainActivity) : SensorEventListener
    {
        override fun onAccuracyChanged(sensor: Sensor, accuracy: Int) {
            // TODO Auto-generated method stub

        }

        override fun onSensorChanged(event: SensorEvent) {
            if (event.sensor.type == Sensor.TYPE_LIGHT) {
                activity.lightPower = event.values[0].toInt()
            }
        }
    }

    private val lightSensorListener by lazy {
        MySensorLight(this)
    }

}
