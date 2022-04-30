<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequests;
use App\Http\Requests\UpdateCategoryRequests;
use App\Interfaces\Icategory;
use App\Interfaces\Idesign;
use App\Interfaces\Iposition;

class CategoryController extends Controller
{
    private $_category;

    private $_position;
    /* design-algoritm */
    private $_design;

    public function __construct(Icategory $category,Iposition $position,Idesign $design)
    {
        $this->_category=$category;
        $this->_position=$position;
        $this->_design=$design;
    }
    public function index()
    {
       $categories=$this->_category->get();
       $positions=$this->_position->get();
       $designs=$this->_design->get();
       return view('admin.categories',compact('categories','positions','designs'));
    }
    public function store(StoreCategoryRequests $request)
    {
        $this->_category->store($request);
        return 'category-created';
    }
    public function update($id,UpdateCategoryRequests $request)
    {
        $this->_category->update($id,$request);
        return 'category-updated';
    }
    public function destroy($id)
    {
        $this->_category->destroy($id);
        return 'category-deleted';
    }
}
