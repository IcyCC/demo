<?php

namespace App\Http\Controllers\ArticleAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return Response
     */
    public function index()
    {
        return view('articleadmin.post.index');
    }
}
