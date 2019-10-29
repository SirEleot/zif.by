<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class HomeController extends Controller
{
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->getLastPosts();
        return view("home",compact('posts'));
    }

    public function breaking($sity)  
    {
        return view("breaking", config('common.sities')[$sity]);
    }

}