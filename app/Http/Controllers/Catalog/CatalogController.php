<?php

namespace App\Http\Controllers\Catalog;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CatalogController extends BaseCatalogController
{
    public function index(
        int $categoryId, 
        CategoryRepository $categoryRepository, 
        ItemRepository $itemRepository, 
        SettingRepository $settingRepository,
        Request $request
    )
    {
        $categories = $categoryRepository->getAll();
        switch ($categoryId) {
            //search
            case -1:
                if($request->input('search') != null) {
                    $request->session()->put('search',$request->input('search'));
                }
                $paginator = $itemRepository->getSearchedWithPaginate($request->session()->get('search',''));
                break;
            //all
            case 0:
                $paginator = $itemRepository->getAllWithPaginate();
                break;
            //sale
            case 99:
                $paginator = $itemRepository->getSaleWithPaginate();
                break;
            //by categories
            default:
                $arrayCategories = $categoryRepository->getCategoriesById($categoryId);
                $paginator = $itemRepository->getByCategories($arrayCategories);
                break;
        }
      
        $coef = $settingRepository->getCoef();
        return view("catalog.main", compact('paginator', 'categories', 'categoryId', 'coef'));
    }

    public function item(
        int $id, 
        ItemRepository $itemRepository,
        SettingRepository $settingRepository
    )
    {
        $items = $itemRepository->getById($id);
        $coef = $settingRepository->getCoef();
        return view("catalog.item", compact('items', 'coef'));
    }

    public function cart(
        ItemRepository $itemRepository,
        SettingRepository $settingRepository
    )
    {
        $itemsArray =  json_decode($_COOKIE['cart']);
        //dd($itemsArray);
        $counts = array();
        $idsArray = array();
        foreach ($itemsArray as $value) {
            $idsArray[] = $value[0];
            $counts[$value[0]] = $value[1];
        }
        $items = count($itemsArray) > 0 ? $itemRepository->getByRange($idsArray) : new Collection();
        $coef = $settingRepository->getCoef();
        return view("catalog.cart", compact('items', 'counts', 'coef'));
    }

    public function reset()
    {
        setcookie('cart', '[]', time() + 3.154e+7);
        return redirect()->route('home');
    }
}
