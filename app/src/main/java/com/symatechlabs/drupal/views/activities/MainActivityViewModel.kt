package com.symatechlabs.drupal.views.activities


import android.util.Log
import android.widget.LinearLayout
import android.widget.ProgressBar
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.lifecycle.LifecycleOwner
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.Observer
import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.symatechlabs.drupal.common.Constants
import com.symatechlabs.drupal.common.Constants.CONNECTIVITY_ERROR_RETRY
import com.symatechlabs.drupal.common.Constants.GENERAL_ERROR
import com.symatechlabs.drupal.data.entities.Article
import com.symatechlabs.drupal.data.responses.article.ArticleResponse
import com.symatechlabs.drupal.network.Resource
import com.symatechlabs.drupal.repository.ArticleRepository
import com.symatechlabs.drupal.views.adapters.MainAdapter
import dagger.hilt.android.lifecycle.HiltViewModel
import kotlinx.coroutines.launch
import javax.inject.Inject

@HiltViewModel
class MainActivityViewModel @Inject constructor(
    val articleRepository: ArticleRepository
) : ViewModel() {

    val articleLiveData = MutableLiveData<Resource<ArticleResponse>?>();
    val LOG_TAG = "MainActivityViewModel";
    companion object{
        lateinit var mainAdapter: MainAdapter;
    }


    fun getArticles() {
        articleLiveData.value = null;
        viewModelScope.launch {
            articleLiveData.value = articleRepository.getArticles();
        }
    }


    fun observe(
        appCompatActivity: AppCompatActivity,
        lifecycleOwner: LifecycleOwner,
        mainActivityMvc: MainActivityMvc,
        viewModel: MainActivityViewModel,
    ) {

        viewModel.articleLiveData.observe(lifecycleOwner, Observer {
            // lifecycleScope.launch()
            when (it) {
                is Resource.Success -> {
                    Log.d(LOG_TAG, "Resource.Success");
                    mainActivityMvc.mainActivityBinding.swipeRefreshLayout.isRefreshing = false;
                    try {
                        var articleList: MutableList<Article> = mutableListOf();

                            if(it.value.data.isNotEmpty()) {
                                for (res in it.value.data) {
                                        articleList.add(
                                            Article(
                                                0,
                                                res.attributes.body.value
                                            )
                                        );
                                }
                                mainAdapter = MainAdapter(articleList, appCompatActivity);
                                Log.d(LOG_TAG, "ArticleList " + articleList.size.toString());
                                mainActivityMvc.mainActivityBinding.articleList.adapter =
                                    mainAdapter;

                                mainActivityMvc.mainActivityBinding.articleList.layoutManager =
                                    LinearLayoutManager(appCompatActivity);
                                mainActivityMvc.mainActivityBinding.progressbar.visibility =
                                    ProgressBar.GONE;
                                mainActivityMvc.mainActivityBinding.articleList.visibility =
                                    RecyclerView.VISIBLE;
                                mainActivityMvc.mainActivityBinding.noResultsLayout.noResults.visibility =
                                    LinearLayout.GONE;
                            }else{
                                mainActivityMvc.mainActivityBinding.progressbar.visibility =
                                    ProgressBar.GONE;
                                mainActivityMvc.mainActivityBinding.articleList.visibility =
                                    RecyclerView.GONE;
                                mainActivityMvc.mainActivityBinding.noResultsLayout.noResults.visibility =
                                    LinearLayout.VISIBLE;

                            }


                    } catch (e: Exception) {
                        Log.d(LOG_TAG, e.message.toString());
                    }
                }

                is Resource.Failure -> {

                    Log.d(LOG_TAG, "Resource.Failure");
                    mainActivityMvc.mainActivityBinding.swipeRefreshLayout.isRefreshing = false;
                    mainActivityMvc.mainActivityBinding.progressbar.visibility =
                        ProgressBar.GONE;
                    mainActivityMvc.mainActivityBinding.articleList.visibility =
                        RecyclerView.GONE;
                    mainActivityMvc.mainActivityBinding.noResultsLayout.noResults.visibility =
                        LinearLayout.VISIBLE;

                    if (it.isNetworkError) {
                        Toast.makeText(
                            appCompatActivity,
                            Constants.CONNECTIVITY_ERROR,
                            Toast.LENGTH_LONG
                        ).show();
                        mainActivityMvc.mainActivityBinding.noResultsLayout.errorTitle.text =
                            CONNECTIVITY_ERROR_RETRY;
                    } else {
                        Toast.makeText(
                            appCompatActivity,
                            Constants.GENERAL_ERROR,
                            Toast.LENGTH_LONG
                        ).show();
                        mainActivityMvc.mainActivityBinding.noResultsLayout.errorTitle.text =
                            GENERAL_ERROR;
                    }
                }

                is Resource.Loading -> {
                    Log.d(LOG_TAG, "Resource.Loading");
                    mainActivityMvc.mainActivityBinding.swipeRefreshLayout.isRefreshing = true;
                    mainActivityMvc.mainActivityBinding.progressbar.visibility =
                        ProgressBar.VISIBLE;
                    mainActivityMvc.mainActivityBinding.articleList.visibility =
                        RecyclerView.GONE;
                    mainActivityMvc.mainActivityBinding.noResultsLayout.noResults.visibility =
                        LinearLayout.GONE;
                }

                else -> {}
            }
        });

    }
}