<?php

namespace App\Http\Controllers\Doors;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DoorsController extends BaseDoorsController
{
    public function index()
    {        
        return view("doors");
    }

}
