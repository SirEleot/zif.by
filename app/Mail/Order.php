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
    private $coef;
    public function __construct(Collection $items, array $counts, $coef, $mail)
    {        
        foreach ($items as $value) {
            $value->count = $counts[$value->id];
        }
        $this->items = $items;
        $this->coef = $coef;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->mail);
        return $this->from($this->mail['from'],$this->mail['name'])
            ->view('mail.order',['items' => $this->items, 'name' => $_POST['name'],'phone' => $_POST['phone'],'coef'=>$this->coef]);
    }
}
