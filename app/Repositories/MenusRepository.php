<?php 
namespace App\Repositories;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Interfaces\Imenu;
use App\Models\Menu;

class MenusRepository implements Imenu
{
    public function get()
    {
        return Menu::get();
    }
    public function edit($id)
    {
        return Menu::findOrFail($id);
    }
    public function store(StoreMenuRequest $request)
    {
        return Menu::create([
            'name'=>$request->name,
        ]);
    }
    public function update($id,UpdateMenuRequest $request)
    {
        $menu=Menu::findOrFail($id);
        if (isset($request->visibility))
        {
            return $menu->update(
                [
                    'submenu'=>$request->submenu,
                    'visibility'=>$request->visibility,
                ]);
        }else{
            return $menu->update([
                'submenu'=>$request->submenu,
                'visibility'=>0,
            ]);
        }
    }
    public function destroy($id)
    {
        return (Menu::findOrFail($id))->delete();
    }
    public function index()
    {
        return Menu::where('visibility',1)->get();
    }
    public function getByName($name)
    {
        $menu=Menu::where('name',$name)->get();
        if (sizeof($menu) > 0)
        {
            return $menu ;
        }else {
            return 'empty';
        }
    }
}