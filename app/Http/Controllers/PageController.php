<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about(){
        return 'Tri sukma sarah <br> 2341720051';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
