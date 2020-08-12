<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Mail;



class MainController extends Controller
{
    public function index (){
        return view('home');
    }

    public function about (){
        return view('about');
    }

    public function contact (){
        return view('contact');
    }
   
    public function rumbox(){
        $projects = \App\Rumbox::paginate(9); //пагинация
        return view('navi_category/rumbox', compact('projects'));
    }
    public function paint_number30x40(){
        $projects = \App\Paint_number_30x40::paginate(9); //пагинация
        return view('navi_category/paint_number30x40', compact('projects'));
    }
    public function paint_number40x50(){
        $projects = \App\Paint_number_40x50::paginate(9); //пагинация
        return view('navi_category/paint_number40x50', compact('projects'));
    }
    
    public function trip_number40x50(){
        $projects = \App\Trip_number_40x50::paginate(9); //пагинация
        return view('navi_category/trip_number40x50', compact('projects'));
    }
    public function diamond_20x30(){
        $projects = \App\Diamond_20x30::paginate(9); //пагинация
        return view('navi_category/diamond_20x30', compact('projects'));
    }
    public function diamond_sircle_40x50(){
        $projects = \App\DiamondSircle_40x50::paginate(9); //пагинация
        return view('navi_category/diamond_sircle_40x50', compact('projects'));
    }
    public function diamond_square_30x40(){
        $projects = \App\DiamondSquare_30x40::paginate(9); //пагинация
        return view('navi_category/diamond_square_30x40', compact('projects'));
    }
    public function diamond_square_40x50(){
        $projects = \App\DiamondSquare_40x50::paginate(9); //пагинация
        return view('navi_category/diamond_square_40x50', compact('projects'));
    }
    public function diamond_equal_40x50(){
        $projects = \App\DiamondEqual_40x50::paginate(9); //пагинация
        return view('navi_category/diamond_equal_40x50', compact('projects'));
    }
    public function mosaic3d_40x50(){
        $projects = \App\Mosaic3d_40x50::paginate(9); //пагинация
        return view('navi_category/mosaic3d_40x50', compact('projects'));
    }
    public function embroidery_40x40(){
        $projects = \App\Embroidery_40x40::paginate(9); //пагинация
        return view('navi_category/embroidery_40x40', compact('projects'));
    }
    public function embroidery_40x50(){
        $projects = \App\Embroidery_40x50::paginate(9); //пагинация
        return view('navi_category/embroidery_40x50', compact('projects'));
    }
    
    
   
    // запись заказа в бд
    public function store(){ 
        $checkout =  new \App\Checkout();
        $checkout -> article_check = json_encode(request()-> all());
        $checkout -> save();
        Mail::send(['text'=>'mail'],['name','magazine'], function($message){
            $message->to('rockfoksi@gmail.com','magazine') -> subject('Новый заказ');//кому
            $message->to('musepictures@mail.ru','magazine') -> subject('Новый заказ');//кому
            $message->to('ekzo_rock@mail.ru','magazine') -> subject('Новый заказ');//кому
            $message->from('rockfoksi@gmail.com', 'Интернет-магазин "Muse"'); // от кого 
        });
        return redirect('/');        
    }    
}
