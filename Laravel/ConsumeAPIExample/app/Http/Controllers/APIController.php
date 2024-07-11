<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    //
    public $API_URL = "https://dummyjson.com/products"; 
    public function listProducts(){
        $productsData = Http::get($this->API_URL);

        //return $productsData;

        return view("listProducts", ["productsData" => $productsData["products"]]);
    }

    public function viewProduct($pid = 0){
        if($pid == 0){
            $this->listProducts();
        }else{
            $productData = Http::get($this->API_URL."/$pid");

            if(!empty($productData["id"])){
                return view("viewProduct", ["productData" => $productData]);
            }else{
               return view("error", ["errormessage" => "No Product found with $pid ID"]); 
            }
        }
    }
}
