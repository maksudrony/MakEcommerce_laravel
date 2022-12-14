<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // $data = gpu::all(); //gpu table's name of the database, table er value gula sata te eshe store hobe
        // return view("home", compact("data"));
        return view("home");
    }
    public function redirects(){
        // $data = gpu::all(); //gpu table's name of the database, table er value gula sata te eshe store hobe
        // $data = ram::all();
        // $data = keyboard::all();
        $usertype = Auth::user()-> usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }
        else{
            return view("home");
            // return view('home', compact('data'));
        }
    }

}
