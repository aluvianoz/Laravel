<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $articles = Article::search($request->title)->orderBy('id','DESC')->paginate(5);
      $articles->each(function($articles){
        $articles->category;
        $articles->user;
      });



      return view('admin.articles.index')
      ->with('articles',$articles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::orderBy('name','ASC')->lists('name','id');
      $tags = Tag::orderBy('name','ASC')->lists('name','id');
      return view('admin.articles.create')
      ->with('categories',$categories)
      ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //manipulacion de imágenes

        if($request->file('image')){
        $file = $request->file('image');
        $name= 'blogapp_' . time() .'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/images/articles';
        $file->move($path,$name);
      }
//guardar articulo
      $article = new Article($request->all());
      $article->user_id= \Auth::user()->id;
      $article->save();

      $article->tags()->sync($request->tags);

      $image= new Image();
      $image->name = $name;
      $image->article()->associate($article);
      $image->save();

      Flash::success("El artículo $article->title ha sido creado con éxito");
      return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category;
        $categories = Category::OrderBy('name','DESC')->lists('name','id');
        $tags = Tag::OrderBy('name','DESC')->lists('name','id');
        $my_tags = $article->tags->lists('id')->ToArray();
      return view('admin.articles.edit')
        ->with('categories',$categories)
        ->with('article',$article)
        ->with('tags',$tags)
        ->with('my_tags',$my_tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article= Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);
        Flash::warning("Se ha editado el artículo $article->name con éxito");
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        Flash::error("Se ha eliminado el articulo $article->title de forma exitosa");
        return redirect()->route('admin.articles.index');
    }
}
