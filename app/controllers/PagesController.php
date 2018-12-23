<?php

namespace App\Controllers;

use App\Poison;

class PagesController
{

    public function index()
    {
        redirect('services');
    }

    public function services()
    {
        return view('services');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }

}