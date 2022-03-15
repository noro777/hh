<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public  function index(){
        $products = \App\Models\Product::all();

        return view('admin',compact('products'));
    }

}
