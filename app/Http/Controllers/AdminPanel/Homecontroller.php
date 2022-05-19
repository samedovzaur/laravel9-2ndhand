<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        $sliderdata=Product::limit(4);

        return view("admin.index",[
            'sliderdata'=>$sliderdata
        ]);
    }
}
