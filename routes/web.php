<?php

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
    return view('welcome');
});

Route::get('foo', function () {
    echo "Hello World";
});
//dengan eloquent model
Route::get('produk/semua', function () {
    $produk = App\Produk::all();
    foreach ($produk as $data) {
    	echo $data->id_produk.".".
    	$data->nama_produk.".".
    	$data->harga_jual."<br>";

    }
});
//tanpa eloquent model
Route::get('produk/all', function () {
    $produk = DB::table('produk')->get();
    foreach ($produk as $data) {
    	echo $data->id_produk.".".
    	$data->nama_produk.".".
    	$data->harga_jual."<br>";

    }
});
//tambah dengan eloquent model
Route::get('produk/add1', function () {
    $produk = new App\Produk;
    $produk->nama_produk="Sikat Gigi";
    $produk->harga_jual="2000";
    $produk->diskon="10";
    $produk->save();
    echo "sukses di tambahkan dengan eloquent model!";
});
//tanpa eloquent model
Route::get('produk/add2', function () {
    $produk = DB::table('produk')->insert(['nama_produk'=>'Kispray','harga_jual'=>'500']);
    echo "sukses di tambahkan tanpa eloquent model!";
});


