<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public $name = 'Post';
    public function view($id){
        return view('single')->with('name',$this->name);
    }
}
