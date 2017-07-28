<?php

namespace App\Http\Controllers\Tourist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Post;
use Carbon\Carbon;
class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('article.posts_per_page'));

        return view('tourist.article.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('tourist.article.post')->withPost($post);
    }
}
