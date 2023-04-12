<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata', function() {
    return 'Nama : Mita <br> NIM : 33420119 <br> Alamat : Semarang <br> Hobi : Berenang';
});

Route::get('mahasiswa/{prodi}', function($prodi){
    return 'Mahasiswa Program Studi : '.$prodi;
});

Route::get('mahasiswa2/{prodi?}', function($prodi=null){
    if($prodi == null)
        return "Data Program Studi kosong";
    return "Mahasiswa Program Studi : ".$prodi;
});

Route::get('mahasiswa3/{prodi?}', function($prodi="Teknik Informatika"){
    return "Mahasiswa Program Studi : ".$prodi;
});

Route::get('biodata2', function(){
    return view('biodata2');
});

Route::group([], function(){
    Route::get('pertama', function(){
        echo "route pertama";
    });
    Route::get('kedua', function(){
        echo "route kedua";
    });
    Route::get('ketiga', function(){
        echo "route ketiga";
    });
});

Route::group(['prefix' => 'latihan'], function(){
    Route::get('satu', function(){
        echo "Latihan 1";
    });
    Route::get('dua', function(){
        echo "Latihan 2";
    });
    Route::get('tiga', function(){
        echo "Latihan 3";
    });
});

Route::group(array('prefix' => 'admin'), function(){
    //url ke halaman home
    Route::get('/', function(){
        return "Halaman Home Admin";
    });
    //route ke halaman input data buku
    Route::get('posts', function(){
        return "Halaman input data buku";
    });
    //route ke halaman yang menyimpan data
    Route::get('posts/simpan', function(){
        return 'Data berhasil disimpan';
    });
});

Route::name('kuliah')->group(function(){
    Route::get('Teknologi Rekayasa Komputer', function(){
        return "Kuliah di Program Studi Teknologi Rekayasa Komputer";
    });
});
*/
/*
Route::get('/', function (){
    return view('index');
});

Route::get('home', function(){
    return view('home');
});

Route::get('data_peminjam', function(){
    return view('peminjams/data_peminjam');
});

Route::get('lihat_data_peminjam', function(){
    $peminjam = ['Jessica',
                'Maryono',
                'Dina',
                'Rusli'
            ];
    return view('peminjams/lihat_data_peminjam', compact('peminjam'));
});
*/
/*
Route::get('/', 'App\Http\Controllers\IndexController@index');*/
/*
Route::get('/', [IndexController::class, 'index']);

Route::get('lihat_data_peminjam', 'App\Http\Controllers\PeminjamController@lihat_data_peminjam');
*/
Route::get('data_peminjam', 'App\Http\Controllers\DataPeminjamController@index');

Route::get('data_peminjam/create', 'App\Http\Controllers\DataPeminjamController@create')->name('data_peminjam.create');

Route::post('data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');

Route::get('data_peminjam/edit/{id}', 'App\Http\Controllers\DataPeminjamController@edit')->name('data_peminjam.edit');

Route::post('data_peminjam/update/{id}', '\App\Http\Controllers\DataPeminjamController@update')->name('data_peminjam.update');
