package com.symatechlabs.drupal.views.activities

import com.symatechlabs.drupal.views.common.BaseMvcInterface


interface MainActivityInterface : BaseMvcInterface {
    fun setData();
    fun setListerners();
    fun onResume();
    fun sendAPIRequest();
}