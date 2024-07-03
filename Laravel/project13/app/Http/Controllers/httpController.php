<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpController extends Controller
{
    //
    public function viewData(){
        //echo "View Data Called";
        $API_URL = "https://dummyjson.com/products";
        $productsData = Http::get($API_URL);

        //return $productsData;
        //return $productsData["products"];
        return view("listdata", ["products" => $productsData["products"]]);
    }
}
