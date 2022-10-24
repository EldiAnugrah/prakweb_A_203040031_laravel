<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use PhpParser\Node\Stmt\Return_;

use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnValue;


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
    return view('home' ,[    
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Eldi Anugrah",
        "email" => "203040031@mail.unpas.ac.id",
        "image" => "eldi.jpeg"
    ]);
});

Route::get('/blog',[PostController::class,'index']);

//halaman single post
Route::get('posts/{slug}', [PostController::class,'show']);