package com.symatechlabs.drupal.data.source.remote


import com.symatechlabs.drupal.data.responses.article.ArticleResponse
import retrofit2.http.*

interface ArticleApi: Common {

    @GET("node/article")
    suspend fun getArticles(): ArticleResponse;

}