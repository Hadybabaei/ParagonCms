<?php

namespace App\Http\Controllers;

use App\Interfaces\Iarticle;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;


class ArticleController extends Controller
{
    private $_articles;
    
    public function __construct(Iarticle $article)
    {
        $this->_articles=$article;
    }
    public function index()
    {
        $articles=$this->_articles->get();
        return view('admin.articles',compact('articles'));
    }
    public function store(StoreArticleRequest $request)
    {
        $this->_articles->store($request);
        return 'created';
    }
    public function update($id,UpdateArticleRequest $request)
    {
        $this->_articles->update($id,$request);
        return 'edited';
    }
    public function destroy($id)
    {
        $this->_articles->destroy($id);
        return 'deleted';
    }
}
