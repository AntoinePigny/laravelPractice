<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $redirectTo = '/article/';
    public function index(){
    	$articles = Article::all();

    	return view('article.list', ['articles' => $articles]);
    }
}
