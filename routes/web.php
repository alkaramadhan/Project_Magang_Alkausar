<?php
use Illuminate\Support\Facades\Input;
use App\Produk;

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

Route::get('register-pembeli', function () {
    return view('pembeli.register');
});

Route::get('register-pedagang', function () {
    return view('pedagang.register');
});

Route::get('login-pedagang', function () {
    return view('pedagang.login');
});

Route::get('login-pembeli', function () {
    return view('pembeli.login');
});
Route::get('pengaturan-akun', function(){
    return view('pedagang.pengaturan_akun');
});
Route::get('/produk-pedagang','ProdukController@index', function (){
    return view('pedagang.produk_pedagang');
});  
Route::get('/pedagang', function (){
    return view('pedagang.home_pedagang');
});  
Route::any('/cari', function(){
    $q = Input::get('q');
    $search = Produk::where ('nama_produk', 'LIKE', '%' . $q . '%')->get();
    if (count ($search) > 0)
    return view('pencarian')->withSearch($search)->withQuery($q);
    else
    return view('pencarian')->withMessage ( 'No Details found. Try to search again !' );
});
// Produk
Route::get('/tambah-barang', 'ProdukController@tambah');
Route::post('/simpan', 'ProdukController@simpan')->name('produk.simpan');
Route::get('/edit-barang/{id}', 'ProdukController@edit')->name('edit');
Route::post('/update', 'ProdukController@update')->name('produk.update');
Route::get('/delete/{id}', 'ProdukController@delete')->name('delete');
Route::get('/produk/export_excel', 'ProdukController@export_excel');
// Produk Tutup
// -----------------------------------Update Pembeli--------------------------------//
Route::get('/edit/user/', 'ProfileController@edit')->name('user.edit');
Route::post('/edit/user/', 'ProfileController@update')->name('user.update');
// ---------------------------------------------------------------------------------//
Route::post('/wishlist', 'WishlistController@store')->name('wishlist.store');
Route::get('/favorite', 'WishlistController@index')->name('wishlist.index');
Route::get('/hapus/{id}', 'WishlistController@destroy')->name('hapus');
// -----------------------------------Pengaturan Pedagang--------------------------//
Route::get('/pengaturan-pedagang', 'PengaturanController@index', function (){
    return view('pedagang.pengaturan_pedagang');
});
Route::post('/masuk', 'PengaturanController@save')->name('pengaturan.save');
// ---------------------------------------------------------------------------------

// Followers-----------------------------------------------------------------------//
Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'HomeController@user')->name('user.view');
Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');
// ----------------------------------------------------------------------------///

Route::get('pengaturan', 'PedagangController@tambah')->name('pengaturan');
Route::post('nambah', 'PedagangController@nambah')->name('nambah');

// -------------------------------Pesanan---------------------------------//
Route::get('/pesanan', 'PesananController@index')->name('pesanan');
  




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
