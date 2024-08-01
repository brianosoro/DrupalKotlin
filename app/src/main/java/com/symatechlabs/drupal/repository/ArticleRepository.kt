package com.symatechlabs.drupal.repository


import com.symatechlabs.drupal.data.source.remote.ArticleApi
import javax.inject.Inject

class ArticleRepository @Inject constructor(
    private val api: ArticleApi
) : BaseRepository() {

    suspend fun getArticles() = ApiCall {
        api.getArticles();
    }


}