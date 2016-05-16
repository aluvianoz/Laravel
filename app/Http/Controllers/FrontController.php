<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function __construct(){
      Carbon::setLocale('es');
    }

    public function index(){
      $articles = Article::orderBy('id','DESC')->paginate(5);
      $articles->each(function($articles){
        $articles->category;
        $articles->images;
      });

      return view('front.index')
      ->with('articles',$articles);
    }
}
