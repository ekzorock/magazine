<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    public function send (){
        Mail::send(['text'=>'mail'],['name','web dev'], function($message){
            $message->to('rockfoksi@gmail.com','to web dev') -> subject('Новый заказ');
            $message->from('rockfoksi@gmail.com', 'Web dev');
        });
        // $checkout =  new \App\Checkout();
        // dd($checkout -> all());
        // return view('mail',[$checkout]);
        return view('checkoutFinish');
    }
}
