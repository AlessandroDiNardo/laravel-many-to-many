<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
Route :: get('/', [MainController :: class , 'home'])
    -> name('pages.home');

Route :: get('/product', [MainController :: class , 'products'])
    -> name('products-home');

// create new
Route :: get('/product/createnew',[MainController :: class , 'createNew'])
    -> name('product.create');
Route :: post('/product/createnew',[MainController :: class , 'store'])
    ->name('product.store');
// edit product

Route :: get('/product/editproduct/{product}' , [MainController :: class, 'edit'])
    -> name('product.edit');
Route :: post('/product/editproduct/{product}' , [MainController :: class, 'update'])
    -> name('product.update');