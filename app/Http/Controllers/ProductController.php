<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showRumbox($product_id){
        $item = \App\Rumbox::where('id_rumbox', $product_id) -> first();
        return view('showCard.showRumbox',['item' => $item]);
    }
    public function showPaint_number30x40($product_id){
        $item = \App\Paint_number_30x40::where('id_paint_number_30x40', $product_id) -> first();
        return view('showCard.showPaint_number30x40',['item' => $item]);
    }
    public function showPaint_number40x50($product_id){
        $item = \App\Paint_number_40x50::where('id_paint_number_40x50', $product_id) -> first();
        return view('showCard.showPaint_number40x50',['item' => $item]);
    }
    public function showTrip_number40x50($product_id){
        $item = \App\Trip_number_40x50::where('id_trip_number_40x50', $product_id) -> first();
        return view('showCard.showTrip_number40x50',['item' => $item]);
    }
    
}
