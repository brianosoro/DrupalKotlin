package com.symatechlabs.drupal.data.entities

import androidx.room.ColumnInfo
import androidx.room.Entity
import androidx.room.PrimaryKey

@Entity(tableName = "articles")
data class Article(
    @PrimaryKey(autoGenerate = true) val uid: Int,
    @ColumnInfo(name = "value") val value: String?
)
