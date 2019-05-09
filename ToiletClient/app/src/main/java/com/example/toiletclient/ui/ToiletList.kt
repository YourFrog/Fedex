package com.example.toiletclient.ui

import android.content.Context
import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.BaseAdapter
import android.widget.Button
import android.widget.TextView
import android.widget.Toast
import com.example.toiletclient.R
import com.example.toiletclient.ToiletDetails
import org.jetbrains.anko.runOnUiThread
import org.json.JSONArray
import org.json.JSONObject

class ToiletList (var context: Context, val toilets : JSONArray) : BaseAdapter()
{
    override fun getView(position: Int, convertView: View?, parent: ViewGroup?): View?
    {
        var itemView = convertView

        if( itemView == null ) {
            // First inflate the RelativeView object.
            itemView = LayoutInflater.from(context).inflate(R.layout.toilet_item, null)
        }

        val toilet = toilets.get(position) as JSONObject

        itemView?.let {

            itemView.findViewById<TextView>(R.id.name).text = toilet.getString("name")
            itemView.findViewById<TextView>(R.id.detailsButton).tag = toilet.getString("id")


            itemView.findViewById<Button>(R.id.detailsButton)?.setOnClickListener(object:View.OnClickListener{
                override fun onClick(v: View?) {
                    context.runOnUiThread {
                        val intent = Intent(this, ToiletDetails::class.java).apply {
                            putExtra("toiletID", v?.tag as String)
                        }
                        startActivity(intent)

                    }
                }
            })
        }

        return itemView
    }

    override fun getItem(position: Int): Any? {
        return null
    }

    override fun getItemId(position: Int): Long {
        return 0
    }

    override fun getCount(): Int {
        val length =  toilets.length()

        return length
    }
}