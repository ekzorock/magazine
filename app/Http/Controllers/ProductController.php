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
    public function showDiamond_20x30($product_id){
        $item = \App\Diamond_20x30::where('id_diamond_20x30', $product_id) -> first();
        return view('showCard.showDiamond_20x30',['item' => $item]);
    }
    public function showDiamond_sircle_40x50($product_id){
        $item = \App\DiamondSircle_40x50::where('id_diamond_sircle_40x50', $product_id) -> first();
        return view('showCard.showDiamond_sircle_40x50',['item' => $item]);
    }
    public function showDiamond_square_30x40($product_id){
        $item = \App\DiamondSquare_30x40::where('id_diamond_square_30x40', $product_id) -> first();
        return view('showCard.showDiamond_square_30x40',['item' => $item]);
    }
    public function showDiamond_square_40x50($product_id){
        $item = \App\DiamondSquare_40x50::where('id_diamond_square_40x50', $product_id) -> first();
        return view('showCard.showDiamond_square_40x50',['item' => $item]);
    }
    public function diamond_equal_40x50($product_id){
        $item = \App\DiamondEqual_40x50::where('id_diamond_equal_40x50', $product_id) -> first();
        return view('showCard.showDiamond_equal_40x50',['item' => $item]);
    }
    
}
