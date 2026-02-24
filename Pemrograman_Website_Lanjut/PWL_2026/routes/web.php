<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('selamat datang');
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
 return 'World';
});

Route::get('/about', function () {
    return 'NIM: 244107020150 <br> Nama: Gaduh Prakoso'; 
});

Route::get('/user/{gaduh}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{gaduh}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{gaduh}', function ($name='John') {
return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class)->only([
 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class,
'greeting']);


