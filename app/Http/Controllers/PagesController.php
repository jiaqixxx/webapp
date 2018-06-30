<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to WebApp';
        $agent = new Agent();
        $data = array(
            'title' => $title,
            'agent' => $agent
        );
        //One method to pass value to view
        //return view('pages.index', compact('title'));
        return view('pages.index')->with($data);
    }

    public function catalogue(){
        $title = 'This is catalogue page';
        return view('pages.catalogue')->with('title', $title);
    }

    public function finance(){
        $title = 'This is finance page';
        return view('pages.finance')->with('title', $title);
    }

    public function product_guarantee(){
        $title = 'This is product guarantee page';
        return view('pages.product_guarantee')->with('title', $title);
    }

    public function returns(){
        $title = 'This is returns page';
        return view('pages.returns')->with('title', $title);
    }

    public function help_center(){
        $title = 'This is help center page';
        return view('pages.help_center')->with('title', $title);
    }

    public function checkout(){
        $title = 'This is checkout page';
        return view('pages.cart')->with('title', $title);
    }
}
