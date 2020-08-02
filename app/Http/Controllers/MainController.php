<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;




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
   
    // запись заказа в бд
    public function store(){ 
        $checkout =  new \App\Checkout();
        $checkout -> article_check = json_encode(request()-> all());
        $checkout -> save();
        return redirect('/');        
    }    
}
