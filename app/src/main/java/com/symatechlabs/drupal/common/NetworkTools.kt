package com.symatechlabs.drupal.common

import android.annotation.SuppressLint
import android.content.Context
import android.net.*



@SuppressLint("NewApi")
class NetworkTools(context: Context) {
    var conMgr: ConnectivityManager;
    var netInfo: NetworkInfo? = null;
    var context: Context;

    init {
        this.context = context;
        conMgr = this.context.getSystemService(ConnectivityManager::class.java) as ConnectivityManager
    }


    fun checkConnectivity(): Boolean {
        netInfo = conMgr!!.activeNetworkInfo
        return netInfo != null && netInfo!!.isConnectedOrConnecting && netInfo!!.isAvailable
    }
}