<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view("public/home");
    }
    public function viewProduct($p_id){
        return view("public/viewProduct");
    }
}
