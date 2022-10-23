<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::get('/blog', function () {
    
$blog_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Piyul Alas Majapahit",
        "body" => "JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
        Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
        enim cum error repudiandae?"
    ],

    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Piyul Alas Majapahit",
        "body" => "JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
        Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
        enim cum error repudiandae?JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
        Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
        enim cum error repudiandaeJLorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
        Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
        enim cum error repudiandae"
    ],
];
    return view('posts',[
        "title" => "posts",
        "posts" => $blog_post
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Piyul Alas Majapahit",
            "body" => "JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
            Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
            enim cum error repudiandae?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Piyul Alas Majapahit",
            "body" => "JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
            Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
            enim cum error repudiandae?JLorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
            Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
            enim cum error repudiandaeJLorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Excepturi amet eum repellat dolor necessitatibus quasi hic blanditiis. 
            Quam voluptatibus totam sunt numquam expedita placeat perspiciatis ipsam,
            enim cum error repudiandae"
        ],
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view ('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
