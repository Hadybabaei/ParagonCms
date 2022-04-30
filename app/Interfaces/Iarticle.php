<?php 
namespace App\Interfaces;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;


interface Iarticle 
{
    public function get();
    public function store(StoreArticleRequest $request);
    public function update($id,UpdateArticleRequest $request);
    public function destroy($id);
    public function edit($id);
}