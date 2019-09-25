<?php

namespace App\Http\Controllers\Catalog;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Models;

use Illuminate\Http\Request;

class CatalogController extends BaseCatalogController
{
    public function Index(int $categoryId, CategoryRepository $categoryRepository, ItemRepository $itemRepository)
    {
        $categories = $categoryRepository->getAll();
        if($categoryId == 0){
            $paginator = $itemRepository->getAllWithPaginate();
        }else{ 
            $arrayCategories = $categoryRepository->getCategoriesById($categoryId);
            $paginator = $itemRepository->getByCategories($arrayCategories);
        }
        //dd($paginator);
        return view("catalog", compact('paginator', 'categories', 'categoryId'));
    }
}
