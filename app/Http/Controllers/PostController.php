<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public $name = 'Post';

    public function view($id)
    {
        return view('website.single')->with('name', $this->name);
    }
}