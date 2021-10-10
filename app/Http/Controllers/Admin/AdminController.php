<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $data = [];
        // $data['name'] = "mohamed";
        // $data['age'] = "26";
        // $data['country'] = "Egypt";

        $obj = new \stdClass();
        $obj->name = "mohamed";
        $obj->age  = "26";
        return view('welcome',compact('obj'));
    }
}
