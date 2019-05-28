package com.example.toiletclient

import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.AdapterView
import android.widget.ListView
import android.widget.Toast
import com.example.toiletclient.ui.ToiletList
import com.github.kittinunf.fuel.httpGet
import com.github.kittinunf.fuel.json.responseJson
import org.jetbrains.anko.doAsync
import java.util.*

class MainActivity : AppCompatActivity()
{
    companion object {
        val BASE_URI = "http://yourfrog12.usermd.net/toilet/web/"
    }

    val timer  = Timer()
    override fun onCreate(savedInstanceState: Bundle?)
    {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val activity = this
        timer.scheduleAtFixedRate(object: TimerTask() {
            override fun run() {
                runOnUiThread(object : Runnable {
                    override fun run() {
                        activity.reloadToiletList()
                    }
                })
            }
        }, 0, 5000)


        title = "Lista toalet"
        val toiletList = findViewById<ListView>(R.id.toiletList)
    }

    override fun onDestroy() {
        super.onDestroy()

        timer.cancel()
    }

    private fun reloadToiletList()
    {
        runOnUiThread {
            val activity = this
            val uri = MainActivity.BASE_URI + "list"

            uri.httpGet().responseJson { request, response, result ->
                runOnUiThread {
                    if (response.statusCode != 200) {
                        activity.runOnUiThread {
                            Toast.makeText(baseContext, "Problem z pobraniem listy ", Toast.LENGTH_SHORT).show()
                        }
                    } else {

                        val toiletListJson = result.get().obj()
                        val toiletList = findViewById<ListView>(R.id.toiletList)
                        toiletList.adapter = ToiletList(this, toiletListJson.getJSONArray("toilets"))
                        (toiletList.adapter as ToiletList).notifyDataSetChanged()
                    }
                }
            }
        }
    }
}
