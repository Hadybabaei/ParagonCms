<?php 
namespace App\Repositories;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Interfaces\Iarticle;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticlesRepository implements Iarticle
{
    public function edit($id)
    {
        $articles=Article::findOrFail($id);
        if (Auth::user()->id == $articles->user_id)
        {
            return $data=[Category::get(),$articles];
        }else{
            return 'شما صاحب این پست نیستید';
        }
        
    }
    public function get()
    {
        return Article::get();
    }
    public function store(StoreArticleRequest $request)
    {
        return Article::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'slug'=>Str::slug($request->title),
            'body'=>$request->body,
            'user_id'=>Auth::user()->id,
        ]);
    }
    public function update($id,UpdateArticleRequest $request)
    {
        return Article::findOrFail($id)->update(
            [
                'title'=>$request->title,
                'category_id'=>$request->category_id,
                'description'=>$request->description,
                'slug'=>Str::slug($request->title),
                'body'=>$request->body,
            ]);
    }
    public function destroy($id)
    {
        return (Article::findOrFail($id))->delete();
    }
}