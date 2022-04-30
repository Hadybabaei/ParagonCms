<?php

namespace App\Interfaces;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

interface Imenu
{
    public function get();
    public function store(StoreMenuRequest $request);
    public function update($id,UpdateMenuRequest $request);
    public function destroy($id);
    public function edit($id);
    public function index();
    public function getByName($name);
}