<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name=session('fullname');
        $datetime1 = strtotime(session('mydropdate'));
            $datetime2 = strtotime(session('mydate'));
            $secs = $datetime1 - $datetime2;// == return sec in difference
            $days = $secs / 86400;
            //return $days;
            //      $order->price=$days*$request['price'];
            $amount=$days*session('price');
            
           // return $order->price;
            $data=['car_name'=>session('car_name'),'plate_no'=>session('plate_no'),'amount_done'=>$amount];
        return $this->view('mail',compact('data'))->to('jaimitgandhi9@gmail.com');
    }
}
