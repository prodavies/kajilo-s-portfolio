<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function welcome(){

        return view('welcome');
    }

    public function about()
    {
        return view("about");
    }

    public function resume()
    {
        return view("resume");
    }

    public function projects()
    {
        return view("projects");
    }

    public function portfolio()
    {
        return view("portfolio");
    }
    
}
