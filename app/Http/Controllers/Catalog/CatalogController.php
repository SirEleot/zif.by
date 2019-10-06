<?php

namespace App\Http\Controllers\Catalog;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CatalogController extends BaseCatalogController
{
    public function index(int $categoryId, CategoryRepository $categoryRepository, ItemRepository $itemRepository)
    {
        $categories = $categoryRepository->getAll();
        if($categoryId == 0){
            $paginator = $itemRepository->getAllWithPaginate();
        }else{ 
            $arrayCategories = $categoryRepository->getCategoriesById($categoryId);
            $paginator = $itemRepository->getByCategories($arrayCategories);
        }
        //dd($paginator);
        return view("catalog.main", compact('paginator', 'categories', 'categoryId'));
    }

    public function item(int $id, ItemRepository $itemRepository )
    {
        $items = $itemRepository->getById($id);
        //dd($items);
        return view("catalog.item", compact('items'));
    }

    public function cart(Request $req, ItemRepository $itemRepository)
    {
        $itemsArray =  $_COOKIE['cart'] ? json_decode($_COOKIE['cart']) : [];
        $idsArray = array_map(function($i){ return $i[0];}, $itemsArray);
        $items = count($itemsArray) > 0 ? $itemRepository->getByRange($idsArray) : new Collection();
        //dd($itemsArray, $idsArray, $items);
        return view("catalog.cart", compact('items'));
    }
}
