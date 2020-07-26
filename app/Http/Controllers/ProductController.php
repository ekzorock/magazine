<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showRumbox($product_id){
        $item = \App\Rumbox::where('id_rumbox', $product_id) -> first();
        // dd($item);
        return view('showCard.showRumbox',['item' => $item
        ]);
    }
}
