<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class APIController extends Controller
{
    //
    public function listProducts(){
        //echo "Called";
        $API_URL = "https://dummyjson.com/products";
        $productsData = Http::get($API_URL);
        //return $productsData;

        return view("listproducts", ["productsData" => $productsData["products"]]);
    }
}
