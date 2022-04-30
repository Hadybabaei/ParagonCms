<?php

namespace App\Http\Controllers;

use App\Interfaces\Imenu;
use App\Interfaces\Iposition;

class HomeController extends Controller
{
    private $_menu;
    private $_position;
    public function __construct(Imenu $menu,Iposition $position)
    {
        $this->_menu=$menu;
        $this->_position=$position;
    }
    public function index()
    {
        $positions=$this->_position->get();
        $menus=$this->_menu->index();
        return view('index',compact('menus','positions'));
    }
    public function menu($menu)
    {
       return $this->_menu->getByName($menu);  
    }
}
