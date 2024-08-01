package com.symatechlabs.drupal.views.adapters

import android.content.Context
import android.text.Html
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.LinearLayout
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.RecyclerView
import com.symatechlabs.drupal.R
import com.symatechlabs.drupal.data.entities.Article

class MainAdapter(
    articleList: List<Article>,
    appCompatActivity: AppCompatActivity
) :  RecyclerView.Adapter<MainAdapter.ViewHolder>(){

    var articleList: List<Article>;
    lateinit var context: Context;
    var appCompatActivity: AppCompatActivity;
    var LOG_TAG = "MainAdapter";

    init {
        this.articleList = articleList;
        this.appCompatActivity = appCompatActivity;
    }


    class ViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView) {
        var container: LinearLayout
        var excerpt: TextView

        init {
            container = itemView.findViewById(R.id.container);
            excerpt = itemView.findViewById(R.id.excerpt);
        }
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        val contactView: View =
            LayoutInflater.from(parent.context)
                .inflate(
                    R.layout.article_list_item,
                    parent,
                    false
                );
        context = parent.context;
        return ViewHolder(contactView);
    }

    override fun getItemCount(): Int {
        return articleList.size;
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        var article: Article = articleList[position];
        holder.excerpt.text = Html.fromHtml(article.value);
        try {

        }catch (e: Exception){

        }
    }
}