package com.symatechlabs.drupal

import android.app.Application
import androidx.hilt.work.HiltWorkerFactory
import com.symatechlabs.drupal.common.NetworkTools
import dagger.hilt.android.HiltAndroidApp
import javax.inject.Inject

@HiltAndroidApp
class App: Application(){
    @Inject
    lateinit var workerFactory: HiltWorkerFactory;
    lateinit var networkTools: NetworkTools;

    override fun onCreate() {
        super.onCreate()
        networkTools = NetworkTools(applicationContext);
    }



}