<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inventory;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\InventoryController;

Route::get("/", function () {
    return view('welcome');
});

Route::get('/home', function () { 
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () { 
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('inventory', [InventoryController::class, 'index']);
    
Route::get('inventory/{link}', [InventoryController::class, 'show']);

