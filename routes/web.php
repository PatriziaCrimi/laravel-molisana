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
  // Filtering array "pasta_list" to create 3 arrays for "long", "short", "very short" pasta

  // OPTION 1 - COLLECTION --> WHERE
  $collection_pasta = collect($pasta_list);
  $long_pasta = $collection_pasta->where('tipo', 'lunga');
  $short_pasta = $collection_pasta->where('tipo', 'corta');
  $very_short_pasta = $collection_pasta->where('tipo', 'cortissima');
  /*
  // OPTION 2 - FILTER
  $long_pasta = array_filter($pasta_list, function($item) {
    return $item['tipo'] === 'lunga';
  });
  $short_pasta = array_filter($pasta_list, function($item) {
    return $item['tipo'] === 'corta';
  });
  $very_short_pasta = array_filter($pasta_list, function($item) {
    return $item['tipo'] === 'cortissima';
  });
  */

  // Associative array to use the variables in the ".blade.php" file
  $data = [
    'types_list' => [
      'lunghe' => $long_pasta,
      'corte' => $short_pasta,
      'cortissime' => $very_short_pasta,
    ]
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
    'product' => $product
  ];
  return view('product-info', $data);
})->name('product-info');

Route::get('/news', function () {
  return view('news');
})->name('news');
