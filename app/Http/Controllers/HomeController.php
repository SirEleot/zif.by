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

    public function breaking($sity, Request $request)  
    {
        $id = $request->query('id') ?? "0";
        $array = [
            [
                "imgs"=>[
                    "door_1",
                    "door_2"
                ],
                "subtittles" =>[
                    ["Профессиональное вскрытие замков", "без повреждения двери"],                    
                    ["Установка и ремонт", "замков любой сложности"],                    
                    ["Замена замков", "замки в наличии"],                    
                    ["Изготовим ключи по замку", "для дверей сейфов и автомобилей"]

                ],
                "id"=>0
            ],
            [
                "imgs"=>[
                    "auto_1",
                    "auto_2"
                ],
                "subtittles" =>[
                    ["Вскрытие автомобиля", ""],                    
                    ["Ремонт", "замка зажигания"],                    
                    ["Ремонт", "автомобильных замков"],                    
                    ["Вскрытие", "капота"],                    
                    ["Изготовление ключей", ""]
    
                ],
                "id"=>1
            ],
            [
                "imgs"=>[
                    "safe_1",
                    "safe_2"
                ],
                "subtittles" =>[
                    ["Перекодировка", "электронных сейфов"],                    
                    ["Перекодировка", "механичесских сейфов"]
                ],
                "id"=>2
            ]
        ];
        $header = $array[$id] ?? $array[0];
        return view("breaking.$sity", $array[$id] ?? $array[0]);
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