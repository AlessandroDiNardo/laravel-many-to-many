<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route :: get('/', [MainController :: class , 'home'])
    -> name('pages.home');

// show
Route :: get('/products', [MainController :: class , 'products'])
    -> name('product.home');

// create 
Route :: get('/product/create',[MainController :: class , 'create'])
    -> name('product.create');
Route :: post('/product/create',[MainController :: class , 'store'])
    ->name('product.store');

// edit product
Route :: get('/product/edit/{product}' , [MainController :: class, 'edit'])
    -> name('product.edit');
Route :: post('/product/edit/{product}' , [MainController :: class, 'update'])
    -> name('product.update');