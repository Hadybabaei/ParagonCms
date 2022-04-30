<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Interfaces\Imenu;


class MenuController extends Controller
{
    private $_menu;
    
    public function __construct(Imenu $menu)
    {
        $this->_menu=$menu;
    }
    public function index()
    {
        $menus=$this->_menu->get();
        return view('admin.menu',compact('menus'));
    }
    public function store(StoreMenuRequest $request)
    {
        $this->_menu->store($request);
        return 'created';
    }
    public function update($id,UpdateMenuRequest $request)
    {
        $this->_menu->update($id,$request);
        return 'edited';
    }
    public function destroy($id)
    {
        $this->_menu->destroy($id);
        return 'deleted';
    }
}
