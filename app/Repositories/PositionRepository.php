<?php 
namespace App\Repositories;

use App\Interfaces\Iposition;
use App\Models\Position;

class PositionRepository implements Iposition
{
    public function get()
    {
        return Position::with('Category')->where('visibility',1)->orderBy('id')->get();
    }
}