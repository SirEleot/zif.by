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
        return view("breaking.$sity", config('common.sities')[$sity]);
    }

    public function posts(PostRepository $postRepository)
    {
        $posts = $postRepository->getAllWithPaginate();
        return view('posts', compact('posts'));
    }

    public function post(int $id, PostRepository $postRepository)
    {
        $post = $postRepository->getPostById($id);
        $paragraphs = explode("\n",$post->text);
        //dd($paragraphs);
        return view('post', compact('post', 'paragraphs'));
    }

}