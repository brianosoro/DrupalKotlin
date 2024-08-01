package com.symatechlabs.drupal.views.activities

import android.content.Context
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.LinearLayout
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.RecyclerView
import com.symatechlabs.drupal.common.Constants
import com.symatechlabs.drupal.common.NetworkTools
import com.symatechlabs.drupal.databinding.MainActivityBinding
import com.symatechlabs.drupal.repository.ArticleRepository


class MainActivityMvc(
    inflater: LayoutInflater,
    parent: ViewGroup?,
    appCompatActivity: AppCompatActivity,
    articleRepository: ArticleRepository,
    mainActivityViewModel: MainActivityViewModel
) : MainActivityInterface {

    var rootView: View;
    var mainActivityBinding: MainActivityBinding;
    var appCompatActivity: AppCompatActivity;
    var articleRepository: ArticleRepository;
    var mainActivityViewModel: MainActivityViewModel
    var networkTools: NetworkTools;
    var LOG_TAG = "MainActivityMvc";

    init {
        mainActivityBinding = MainActivityBinding.inflate(inflater);
        rootView = mainActivityBinding.root;
        this.articleRepository = articleRepository;
        this.mainActivityViewModel = mainActivityViewModel
        this.appCompatActivity = appCompatActivity;
        this.networkTools = NetworkTools(appCompatActivity);
    }


    override fun setData() {


    }

    override fun setListerners() {
        mainActivityBinding.swipeRefreshLayout.setOnRefreshListener {
            sendAPIRequest();
        }
    }

    override fun onResume() {

    }

    override fun sendAPIRequest() {
        try {
            if (networkTools.checkConnectivity()) {
/*                mainActivityBinding.swipeRefreshLayout.visibility = SwipeRefreshLayout.VISIBLE;*/
                mainActivityBinding.swipeRefreshLayout.isRefreshing = true;
                mainActivityBinding.articleList.visibility = RecyclerView.GONE;
                mainActivityBinding.noResultsLayout.noResults.visibility = LinearLayout.GONE;
                mainActivityViewModel.getArticles();
            }else{
        /*        mainActivityBinding.swipeRefreshLayout.visibility = SwipeRefreshLayout.GONE;*/
                mainActivityBinding.swipeRefreshLayout.isRefreshing = false;
                mainActivityBinding.articleList.visibility = RecyclerView.GONE;
                mainActivityBinding.noResultsLayout.noResults.visibility = LinearLayout.VISIBLE;
                mainActivityBinding.noResultsLayout.errorTitle.text =
                    Constants.CONNECTIVITY_ERROR_RETRY;
                mainActivityBinding.noResultsLayout.errorTitle.gravity = TextView.TEXT_ALIGNMENT_CENTER
                Toast.makeText(appCompatActivity, Constants.CONNECTIVITY_ERROR, Toast.LENGTH_SHORT).show();
            }
        } catch (e: Exception) {
        }

    }

    override fun getRootView_(): View {
        return rootView;
    }

    override fun getContext(): Context {
        return rootView.context;
    }


}