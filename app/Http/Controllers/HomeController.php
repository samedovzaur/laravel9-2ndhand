<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function test(){
        return view('home.test');
    }
    public function param($id,$number){( 
                //echo "parameter 1:",$id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>sum parameters",$id+$number;
        //return view('home.test2',
        [
            'fname'=>$_REQUEST["fname"],
            'lname'=>$_REQUEST["lname"]
        ]);
    }
    public function save(Request $request){
        echo "save function<br>";
        echo "First Name :",$_REQUEST["fname"];
        echo "last name :",$_REQUEST["lname"];
    }
}
