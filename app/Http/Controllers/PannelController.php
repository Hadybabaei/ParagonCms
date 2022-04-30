<?php

namespace App\Http\Controllers;

use App\Interfaces\Iarticle;
use App\Interfaces\Icategory;
use App\Interfaces\Imenu;

class PannelController extends Controller
{
    private $_menu;
    private $_articles;
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Iarticle $articles,Icategory $categories,Imenu $menu)
    {
        $this->middleware('auth');
        $this->_articles=$articles;
        $this->_categories=$categories;
        $this->_menu=$menu;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pannel');
    }
    public function articleEdit($id)
    {
        $articles=$this->_articles->edit($id)[1];
        $categories=$this->_articles->edit($id)[0];
        return view('admin.articles-edit',compact('articles','categories'));
    }
    public function menuEdit($id)
    {
        $menus=$this->_menu->edit($id);
        return view('admin.menu-edit',compact('menus'));
    }
}
