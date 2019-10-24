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
            case 'baranovichi': return [
                'name'=>'Барановичи', 
                'where'=>'Барановичах', 
                'whom'=>'Барановичей', 
                'phone'=>'+375 29 142 09 08'
            ];
            case 'minsk': return [
                'name'=>'Минск', 
                'where'=>'Минске',
                'whom'=>'Минска', 
                'phone'=>'+375 29 142 09 08'
            ];
            case 'slutsk': return [
                'name'=>'Слуцк', 
                'where'=>'Слуцке',
                'whom'=>'Слуцка', 
                'phone'=>'+375 29 142 09 08'
            ];
            case 'luban': return [
                'name'=>'Любаь', 
                'where'=>'Любане',
                'whom'=>'Любаня', 
                'phone'=>'+375 29 142 09 08'
            ];
            case 'kopil': return [
                'name'=>'Копыль', 
                'where'=>'Копыле',
                'whom'=>'Копыля', 
                'phone'=>'+375 29 142 09 08'
            ];
            
            default: return [
                'name'=>'Солигорск', 
                'where'=>'Солигорске',
                'whom'=>'Солигорска', 
                'phone'=>'+375 29 142 09 08'
            ];
        }
    }

}