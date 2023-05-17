<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * A function that gets all the tags for a given article id.
 * $article_id represents the input given to the function.
 * An array of tags gets returned.
 */
function getTagsFromArticleId($article_id) {
    $specifics = DB::table('mappings')
            ->selectRaw('tags.tag')
            ->join('tags', 'mappings.tag_id', '=', 'tags.id')
            ->where('mappings.article_id', '=', $article_id)
            ->get();
    // Define a placeholder array.
    $theTags = [];
    // Accumulate all the relevant data into $theTags array.
    foreach($specifics as $array) {
        if ($array->tag != null) {
        array_push($theTags, $array->tag);
        } else {
            continue;
        }
    }
    return $theTags;
}

/**
 * A function that returns the category a specific article belongs to.
 * $article_id represents the input passed into the array.
 * A string, specifying the cateogry, is returned.
 */
function getCategoryFromArticleId($article_id) {
    $specifics = DB::table("categories")
        ->selectRaw('categories.category')
        ->join('articles', 'categories.id', '=', 'articles.category_id')
        ->where('articles.id', '=', $article_id)
        ->get();
    // The first and only element at position 0 has a category value.
    return $specifics[0]->category;
}

/**
 * A function that returns all the article titles for a given $tag_id.
 * $tag_id represents the input (an integer) given to the function.
 * An array of article titles get returned.
 */
function getArticlesFromTagId($tag_id) {
    $specifics = DB::table('articles')
            ->selectRaw('articles.title')
            ->join('mappings', 'mappings.article_id', '=', 'articles.id')
            ->join('tags', 'tags.id', '=', 'mappings.tag_id')
            ->where('tags.id', '=', $tag_id)
            ->get();
    // Define a placeholder array.
    $theArticles = [];
    // Accumulate all the relevant data into the $theArticles array.
    foreach ($specifics as $array) {
        array_push($theArticles, $array->title);
    }
    return $theArticles;
}

/**
 * A function that fetches all the article titles for a given category id.
 * $category_id is the input supplied to the function.
 * An array of Article Titles get returned.
 */
function getArticlesFromCategoryId($category_id) {
    $specifics = DB::table('articles')
        ->selectRaw('articles.id, articles.title')
        ->where('articles.category_id', '=', $category_id)
        ->get();
    // Define a placeholder array:
    $theArticles = [];
    // Accumulate all the relevant data into $theAricles array.
    foreach($specifics as $article) {
        array_push($theArticles, $article->title);
    }
    return $theArticles;
}

/**
 * A function that fetches all the tag names for a given category id.
 * $category_id represents the input (an integer) passed into the array.
 * An array of tag names get returned.
 */
function getTagsFromCategoryId($category_id) {
    $specifics = DB::table('tags')
        ->selectRaw('tags.tag')
        ->join('mappings', 'tags.id', '=', 'mappings.tag_id')
        ->join('articles', 'mappings.article_id', '=', 'articles.id')
        ->where('articles.category_id', '=', $category_id)
        ->get();
    // Define an empty placeholder
    $theTags = [];
    foreach ($specifics as $specific) {
        // If the tag item already exists in the array, simply continue.
        if (in_array($specific->tag, $theTags)) {
            continue;
        // Insert the element into the array.
        } else {
            array_push($theTags, $specific->tag);
        }
    }
    return $theTags;
}

/**
 * A function that determines the Category from the Tag ID of an article.
 * $tag_id represents the input passed into the function.
 * A string, the category name, is returned to the user.
 */
function getCategoryFromTagId($tag_id) {
    $specifics = DB::table('categories')
        ->selectRaw('categories.category')
        ->join('articles', 'categories.id', '=', 'articles.category_id')
        ->join('mappings', 'articles.id', '=', 'mappings.article_id')
        ->join('tags', 'mappings.tag_id', '=', 'tags.id')
        ->where('tags.id', '=', $tag_id)
        ->get();
    // The first and only array at position 0 has a category value.
    return $specifics[0]->category;
}

/*
// All information via the 3 joins (duplicated because of multiple tags.)
$all_information = DB::table('articles')
->selectRaw('articles.*, categories.category, tags.tag')
->join('categories', 'categories.id', '=', 'articles.category_id')
->join('mappings', 'mappings.article_id', '=', 'articles.id')
->join('tags', 'tags.id', '=', 'mappings.tag_id')
->get();  // Checked
*/

/**
 * getTagsFromArticleId($article_id)
 * getCategoryFromArticleId($article_id)
 * getArticlesFromTagId($tag_id)
 * getArticlesFromCategoryId($category_id)
 * getTagsFromCategoryId($category_id)
 * getCategoryFromTagId($tag_id)
 */
class UserController extends Controller
{
    public function fetchHomePageContent() {
        
        
        // All Articles without the tags.
        $top_articles = DB::table('articles')
            ->selectRaw('articles.*, categories.category')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->orderByDesc('articles.creation_date')
            ->take(5)
            ->get();  // Checked
        
        // For every article array, create a field called `tags` and populate them
        // by means of the getTagsFromArticleId($article_id) function.
        foreach ($top_articles as $article) {
            $article->tags = getTagsFromArticleId($article->id);
        }

        // For each article, extract and display the first paragraph:
        foreach($top_articles as $i => $article) {
            
            // Extract the first paragraph.
            $body = $article->body;
            $start = strpos($body, '<p>');
            $end = strpos($body, '</p>', $start);
            $paragraph = substr($body, $start, $end - $start + 4);

            // Remove the Paragraph Tags <p></p>.
           $article->body = strip_tags($paragraph);
        }

        // For QA purposes.
        // return $top_articles;

        // Pass in an array, containing `articles`, to the `showHomePage` view:
        return view('showHomePage', [
            'articles' => $top_articles
        ]);
    }

    public function fetchOneArticle($id) {
        // Return one specific article based on the `articles.id` value:
        $article = DB::table('articles')
            ->selectRaw('articles.*, categories.category')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->where('articles.id', '=', $id)
            ->get()[0];  // only 1 Associative Array should be returned.
        
        $article->tags = getTagsFromArticleId($id);

        // For QA purposes
        // return $article;

        return view('showArticle', [
            'theArticle' => $article
        ]);
    }

    public function fetchCategoryArticles($slug) {
        // Return all articles associated with a specific category.
        $articles = DB::table('articles')
            ->selectRaw('articles.id, articles.title, categories.category')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->where('categories.slug', '=', $slug)
            ->get();
        
        // For QA Purposes.
        // return $articles;

        // $n represents the number of articles.
        $n = count($articles);

        // If there are no articles, then the category probably does not exist.
        if ($n === 0) {
            return redirect('/')->with('failure', 'The requested category does not exist');
        }
        else {
            return view('showCategory', [
                'articles' => $articles
            ]);
        }        
    }

    public function fetchAllTags($slug) {
        $articles = DB::table('articles')
            ->selectRaw('articles.id, articles.title, tags.tag')
            ->join('mappings', 'articles.id', '=', 'mappings.article_id')
            ->join('tags', 'mappings.tag_id', '=', 'tags.id')
            ->where('tags.slug', '=', $slug)
            ->get();

        foreach ($articles as $article) {
            $article->tags = getTagsFromArticleId($article->id);
        }

        // For QA Purposes:
        // return $articles;

        // $n represents the number of articles.
        $n = count($articles);

        // If there are no articles, then the category probably does not exist.
        if ($n === 0) {
            return redirect('/')->with('failure', 'The requested tag does not exist.');
        }
        else {
            $officialTag = $articles[0]->tag;

            return view('showTag', [
                'articles' => $articles,
                'slug' => $slug,
                'tag' => $officialTag
            ]);
        }
    }

    public function showLegalPage() {
        return view('showLegalPage');
    }
}
