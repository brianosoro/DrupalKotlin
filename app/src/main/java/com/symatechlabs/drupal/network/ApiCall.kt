package com.symatechlabs.drupal.network;

import android.util.Log
import com.symatechlabs.drupal.common.Constants.LOG_TAG_HTTP
import kotlinx.coroutines.Dispatchers
import kotlinx.coroutines.withContext
import retrofit2.HttpException

interface ApiCall {

    suspend fun <T> ApiCall(
        apiCall: suspend () -> T
    ): Resource<T> {
        return withContext(Dispatchers.IO) {
            try {
                Resource.Success(apiCall.invoke())
            } catch (throwable: Throwable) {
                when (throwable) {
                    is HttpException -> {
                        Log.d(LOG_TAG_HTTP,throwable.message.toString());
                        Resource.Failure(
                            false,
                            throwable.message.toString(),
                            throwable.response()?.errorBody()
                        )
                    }
                    else -> {
                        Log.d(LOG_TAG_HTTP,throwable.message.toString());
                        Resource.Failure(true, throwable.message.toString(), null)
                    }
                }
            }
        }
    }
}