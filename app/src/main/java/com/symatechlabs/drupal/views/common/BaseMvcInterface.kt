package com.symatechlabs.drupal.views.common

import android.content.Context
import android.view.View

interface BaseMvcInterface {

    public fun getRootView_(): View;
    public fun getContext(): Context;
}