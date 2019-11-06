<?php

namespace App\Http\Controllers\Message;

use App\Repositories\ItemRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Mail\Order;
use App\Mail\Ticket;
use App\Mail\Callback;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MessageController extends BaseMessageController
{
    public function order(
        ItemRepository $itemRepository,
        SettingRepository $settingRepository
    )
    {
        $itemsArray =  json_decode($_COOKIE['cart']);
        $coef = $settingRepository->getCoef();
        $counts = array();
        $idsArray = array();
        foreach ($itemsArray as $value) {
            $idsArray[] = $value[0];
            $counts[$value[0]] = $value[1];
        }
        $items = count($itemsArray) > 0 ? $itemRepository->getByRange($idsArray) : new Collection();
        if(count($itemsArray) > 0) {
            $mail = config('common.mail.order');
            Mail::to($mail['to'])->send(new Order($items, $counts, $coef,$mail));
            setcookie('cart', '[]', time() + 3.154e+7);
            return redirect(route('catalog',['category'=>0]));
        }else{
            return redirect(route('catalog',['category'=>0]));
        }
    }

    public function ticket(Request $request)
    {
        $mail = config('common.mail.ticket');
        Mail::to($mail['to'])->send(new Ticket($request->input(), $mail));
        return redirect($request->headers->get('referer'));
    }

    public function callback(Request $request)
    {
        $mail = config('common.mail.callback');
        Mail::to($mail['to'])->send(new Callback($request->input(), $mail));
        return redirect($request->headers->get('referer'));
    }

}
