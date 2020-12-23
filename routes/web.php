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
});

Route::get('/products', function () {
  // Storing in a variable the pasta array contained in the file "pasta.php" in "config" folder
  $pasta_list = config('pasta');
  // Associative array to use the variable $pasta_list in the ".blade.php" file
  $data = [
    'pasta_list' => $pasta_list,
  ];
  return view('products', $data);
})->name('products');

Route::get('/product-info/{id}', function($id) {
  // Storing in a variable the pasta array contained in the file "pasta.php" in "config" folder
  $pasta_list = config('pasta');
  // Storing in a variable the specific type of pasta (product) that I need to print its details in the web page
  $product = $pasta_list[$id];
  // Associative array to use the variable $product in the ".blade.php" file
  $data = [
    'product' => $product,
  ];
  return view('product-info', $data);
})->name('product-info');

Route::get('/news', function () {
  return view('news');
})->name('news');
