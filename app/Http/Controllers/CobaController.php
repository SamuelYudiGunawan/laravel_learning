<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function pintuMasuk (Request $Request){
        return 'Selamat datang';
    }
    public function pintuKeluar (Request $Request){
        return 'Selamat jalan';
    }
}
