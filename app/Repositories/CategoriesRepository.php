<?php
namespace App\Repositories;

use App\Http\Requests\StoreCategoryRequests;
use App\Http\Requests\UpdateCategoryRequests;
use App\Interfaces\Icategory;
use App\Models\Category;

class CategoriesRepository implements Icategory
{
    public function get()
    {
        return Category::get();
    }
    public function store(StoreCategoryRequests $request)
    {
        return Category::create([
            'name'=>$request->name,
            'designalgoritm_id'=>$request->design,
            'description'=>$request->description,
            'position_id'=>$request->position_id,
        ]);
    }
    public function update($id,UpdateCategoryRequests $request)
    {
        return Category::findOrFail($id)->update(
            [
                'name'=>$request->name,
                'designalgoritm_id'=>$request->design,
                'description'=>$request->description,
                'position_id'=>$request->position_id,
            ]
            );
    }
    public function destroy($id)
    {
        return (Category::findOrFail($id))->delete();
    }
}