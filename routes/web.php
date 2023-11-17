<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/prodotti', function () {

    // carico da config/products.php l'array di prodotti da mostrare
    $products = config('products');

    return view('products', compact('products'));
})->name('products');

Route::get('/dettaglio-prodotto/{slug}', function ($slug) {

    // prendo l'eleco dei prodotti
    $products = config('products');

    // estraggo dall'array di prodotti l'elemento con slug = $slug
    $product_array = array_filter($products, fn($product) => $product['slug'] === $slug);

    // verifico se è stato trovato un prodotto. Altrienti genero un 404
    if(empty($product_array)) {
        abort(404);
    }

    // prendo il primo elemento di questo array
    $product = $product_array[array_key_first($product_array)];


    return view('productDetail', compact('product'));
})->name('productDetail');
