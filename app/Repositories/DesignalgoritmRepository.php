<?php 
namespace App\Repositories;

use App\Interfaces\Idesign;
use App\Models\Designalgoritm;

class DesignalgoritmRepository implements Idesign
{
    public function get()
    {
        return Designalgoritm::get();
    }
}