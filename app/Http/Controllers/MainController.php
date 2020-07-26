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

    public function store(){
        $checkout =  new \App\Checkout();
        $checkout -> article_check = json_encode(request()-> all());
        $checkout -> save();
        return redirect('/');
        
        // return gettype(json_encode(request()-> all()));
    }    
}
