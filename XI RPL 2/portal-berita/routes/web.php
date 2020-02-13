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

//Relast
Route::get('penulis',function(){
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data ){
        echo "judul : $data->judul<bd>";
        echo "Deskripsi : $data->deskripsi";
        echo "slug : $data->slug";
        echo "<hr>";
    }
});

// //Relasi
// use App\Mahasiswa;
// use App\Dosen;
// use App\Hobi;

// Route::get('relasi1',function){

//     # Mencari mahasiswa dengan NIm 1010101

// }


Route::resource('siswa','SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tabungan/report','TabunganController@jumlah_tabungan');
Route::resource('tabungan','TabunganController');
