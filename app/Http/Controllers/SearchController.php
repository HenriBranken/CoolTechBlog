<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search() {
        // ---------------------------------------------------------------------------------
        if (isset($_GET['query1'])) {
            
            $id_request = $_GET['query1'];
            
            $article = DB::table('articles')
                ->where('id', '=', $id_request)
                ->paginate(2);
            
            // For QA Purposes
            // return $article;
            
            return view('search', [
                'article' => $article
            ]);
        
        // ---------------------------------------------------------------------------------
        } else if (isset($_GET['query2'])) {

            $category_id_request = $_GET['query2'];

            $articles = DB::table('articles')
                ->join('categories', 'categories.id', '=', 'articles.category_id')
                ->where('category_id', '=', $category_id_request)
                ->paginate(5);

                // For QA purposes:
                // return $articles;

                return view('search', [
                    'articles' => $articles
                ]);
        
        // ---------------------------------------------------------------------------------
        } else if (isset($_GET['query3'])) {

            $tag_id_request = $_GET['query3'];

            $tagArticles = DB::table('articles')
                ->join('mappings', 'articles.id', '=', 'mappings.article_id')
                ->join('tags', 'mappings.tag_id', '=', 'tags.id')
                ->where('tags.id', '=', $tag_id_request)
                ->paginate(5);

                // For QA purposes:
                // return $tagArticles;

                return view('search', [
                    'tagArticles' => $tagArticles
                ]);
        } else {
            return view('search');
        }
    }
}
