package com.symatechlabs.drupal.di

import android.content.Context
import com.symatechlabs.drupal.App
import com.symatechlabs.drupal.data.source.remote.ArticleApi
import com.symatechlabs.drupal.data.source.remote.Common


import dagger.Module
import dagger.Provides
import dagger.hilt.InstallIn
import dagger.hilt.android.qualifiers.ApplicationContext
import dagger.hilt.components.SingletonComponent
import okhttp3.OkHttpClient
import retrofit2.Retrofit
import retrofit2.converter.moshi.MoshiConverterFactory

import java.util.concurrent.TimeUnit
import javax.inject.Singleton


@Module
@InstallIn(SingletonComponent::class)
class AppModule {
    @Singleton
    @Provides
    fun provideContext(app: App): Context = app;

    @Singleton
    @Provides
    fun provideBaseApplicationContext(@ApplicationContext app: Context): App {
        return  app as App;
    }

    @Singleton
    @Provides
    fun provideRetrofit(): Retrofit{
        val okHttpClient = OkHttpClient().newBuilder()
            .connectTimeout(60, TimeUnit.SECONDS)
            .readTimeout(60, TimeUnit.SECONDS)
            .writeTimeout(60, TimeUnit.SECONDS)
            .build()
        return Retrofit.Builder()
            .baseUrl(Common.BASE_URL)
            .addConverterFactory(MoshiConverterFactory.create())
            .client(okHttpClient)
            .build();
    }

    @Singleton
    @Provides
    fun provideArticleApi(retrofit: Retrofit): ArticleApi =
        retrofit.create(ArticleApi::class.java)

}