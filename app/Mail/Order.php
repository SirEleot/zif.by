<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $items;

    public function __construct(Collection $items, array $counts)
    {        
        foreach ($items as $value) {
            $value->count = $counts[$value->id];
        }
        $this->items = $items;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->items);
        return $this->view('catalog.order')
            ->with(['items' => $this->items, 'name' => $_POST['name'],'phone' => $_POST['phone']]);
    }
}
