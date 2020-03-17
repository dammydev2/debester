<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function DI()
    {
        return view('DI');
    }

    public function largeFormat()
    {
        return view('largeFormat');
    }

    public function sublimation()
    {
        return view('sublimation');
    }

    public function plasticID()
    {
        return view('plasticID');
    }

    public function brocures()
    {
        return view('brocures');
    }

    public function promotionalItem()
    {
        return view('promotionalItem');
    }

    public function letterHead()
    {
        return view('letterHead');
    }

    public function companySeal()
    {
        return view('companySeal');
    }

    public function customizedShirt()
    {
        return view('customizedShirt');
    }

    public function paperBack()
    {
        return view('paperBack');
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function outdoorCatering()
    {
        return view('outdoorCatering');
    }

    public function cateringService()
    {
        return view('cateringService');
    }

    public function stationery()
    {
        return view('stationery');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
