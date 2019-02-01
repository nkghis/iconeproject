<?php
use Illuminate\Support\Facades\Auth;
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
Route::get('/gmap', 'GmapConttroller@index')->name('gmap');
Route::get('/map', 'GmapConttroller@map')->name('map');
Route::get('/', function () {
    if(Auth::check()){
        return view('home');
    }
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group( ['middleware' => ['auth']], function() {
    Route::get('maps/bycommune', 'MapController@bycommune')->name('maps.bycommune');
    Route::get('/upload', 'GmapConttroller@upload')->name('upload');
    Route::post('/enregistrer', 'GmapConttroller@enregistrer')->name('enregistrer');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('visuels', 'VisuelController');
    Route::resource('maps', 'MapController');
    Route::resource('campagnes', 'CampagneController');

    //A ajouter pour chaque table créer.
    //Route::resource('posts', 'PostController');
});
