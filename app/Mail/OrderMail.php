<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

   
    public function __construct($data)
    {
       $this->data = $data;
    }

    public function build()
    {
        $order = $this->data;
        return $this->from('shamvil89@gmail.com')->view('mail.order_mail',compact('order'))->subject('Email From Easy Multi Vendor Shop');
    }
}
