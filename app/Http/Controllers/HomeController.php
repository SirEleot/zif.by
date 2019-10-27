<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function breaking($sity)  
    {
        $sity_arr = $this->getSityArr($sity);
        return view("breaking", compact('sity_arr'));
    }

    private function getSityArr($sity)
    {
        switch ($sity) {
            case 'starie_dorogi': return [
                'name'=>'Старые Дороги', 
                'where'=>'Старых Дорогах', 
                'whom'=>'Стырых Догог', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'starie_dorogi.png'
            ];
            case 'minsk': return [
                'name'=>'Минск', 
                'where'=>'Минске',
                'whom'=>'Минска', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'minsk.png'
            ];
            case 'slutsk': return [
                'name'=>'Слуцк', 
                'where'=>'Слуцке',
                'whom'=>'Слуцка', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'slutsk.png'
            ];
            case 'luban': return [
                'name'=>'Любаь', 
                'where'=>'Любане',
                'whom'=>'Любаня', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'luban.png'
            ];
            case 'kopil': return [
                'name'=>'Копыль', 
                'where'=>'Копыле',
                'whom'=>'Копыля', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'kopil.png'
            ];
            
            default: return [
                'name'=>'Солигорск', 
                'where'=>'Солигорске',
                'whom'=>'Солигорска', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'soligorsk.png'
            ];
        }
    }

}