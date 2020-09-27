<?php

namespace App\Http\Controllers\Doors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseDoorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }
}
