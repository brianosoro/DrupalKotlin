package com.symatechlabs.drupal.views.activities


import android.Manifest
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.KeyEvent
import android.view.LayoutInflater
import androidx.activity.result.contract.ActivityResultContracts
import androidx.activity.viewModels
import com.symatechlabs.drupal.common.NetworkTools
import com.symatechlabs.drupal.repository.ArticleRepository
import dagger.hilt.android.AndroidEntryPoint
import javax.inject.Inject


@AndroidEntryPoint
class MainActivity : AppCompatActivity() {


    @Inject
    lateinit var articleRepository: ArticleRepository;
    lateinit var mainActivityMvc: MainActivityMvc;
    lateinit var networkTools: NetworkTools;
    val mainActivityViewModel: MainActivityViewModel by viewModels<MainActivityViewModel>();

    companion object {
        lateinit var appCompatActivity: AppCompatActivity;
    }

    init {
        appCompatActivity = this;
    }


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        mainActivityMvc =
            MainActivityMvc(LayoutInflater.from(this), null, this, articleRepository, mainActivityViewModel);
        setContentView(mainActivityMvc.getRootView_())
        networkTools = NetworkTools(this);
        mainActivityMvc.setListerners();
        appCompatActivity = this;
        mainActivityMvc.sendAPIRequest();
        mainActivityViewModel.observe(this, this, mainActivityMvc, mainActivityViewModel);

        requestMultiplePermissionLauncher.launch(
            arrayOf(
                Manifest.permission.INTERNET,
                Manifest.permission.ACCESS_NETWORK_STATE
            )
        )



    }

    override fun onResume() {
        super.onResume()

        if (networkTools.checkConnectivity()) {

        }


    }

    override fun onKeyDown(keyCode: Int, event: KeyEvent?): Boolean {
        if (keyCode == KeyEvent.KEYCODE_BACK) {
            val homeIntent = Intent(Intent.ACTION_MAIN)
            homeIntent.addCategory(Intent.CATEGORY_HOME)
            homeIntent.flags = Intent.FLAG_ACTIVITY_CLEAR_TOP
            startActivity(homeIntent)
            return true
        }
        return super.onKeyDown(keyCode, event)
    }

    private val requestMultiplePermissionLauncher =
        registerForActivityResult(
            ActivityResultContracts.RequestMultiplePermissions()
        ) { result ->

        }



}
