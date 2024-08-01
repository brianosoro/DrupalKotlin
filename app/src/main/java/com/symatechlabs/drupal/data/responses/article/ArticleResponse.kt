package com.symatechlabs.drupal.data.responses.article;

import com.squareup.moshi.Json


data class ArticleResponse(
    @field:Json(name = "data") val data: List<Data> = listOf()
)

data class Data(
    @field:Json(name = "id") val id: String? = "",
    @field:Json(name = "attributes") val attributes: Attributes = Attributes()
)

data class Attributes(
    @field:Json(name = "title") val title: String? = "",
    @field:Json(name = "created") val created: String? = "",
    @field:Json(name = "path") val path: Path = Path(),
    @field:Json(name = "body") val body: Body = Body()
)

data class Path(
    @field:Json(name = "alias") val alias: String? = "",
    @field:Json(name = "pid") val pid: Int? = 0
)

data class Body(
    @field:Json(name = "value") val value: String? = ""
)