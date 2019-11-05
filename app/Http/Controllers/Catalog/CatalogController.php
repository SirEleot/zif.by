<?php

namespace App\Http\Controllers\Catalog;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Mail\Order;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CatalogController extends BaseCatalogController
{
    public function index(
        int $categoryId, 
        CategoryRepository $categoryRepository, 
        ItemRepository $itemRepository, 
        SettingRepository $settingRepository
    )
    {
        $categories = $categoryRepository->getAll();
        if($categoryId == 0){
            $paginator = $itemRepository->getAllWithPaginate();
        }else{ 
            $arrayCategories = $categoryRepository->getCategoriesById($categoryId);
            $paginator = $itemRepository->getByCategories($arrayCategories);
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

    public function order(Request $req, ItemRepository $itemRepository)
    {
        $itemsArray =  json_decode($_COOKIE['cart']);
        $counts = array();
        $idsArray = array();
        foreach ($itemsArray as $value) {
            $idsArray[] = $value[0];
            $counts[$value[0]] = $value[1];
        }
        $items = count($itemsArray) > 0 ? $itemRepository->getByRange($idsArray) : new Collection();
        if(count($itemsArray) > 0) {
            Mail::to('support@zif.by')->send(new Order($items, $counts));
            setcookie('cart', '[]', time() + 3.154e+7);
            return 'ok';
        }else{
            return 'noItems';
        }
    }

    public function reset()
    {
        setcookie('cart', '[]', time() + 3.154e+7);
        return redirect()->route('home');
    }
}
