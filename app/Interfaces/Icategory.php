<?php 
namespace App\Interfaces;

use App\Http\Requests\StoreCategoryRequests;
use App\Http\Requests\UpdateCategoryRequests;

interface Icategory
{
    public function get();
    public function store(StoreCategoryRequests $request);
    public function update($id,UpdateCategoryRequests $request);
    public function destroy($id);
}