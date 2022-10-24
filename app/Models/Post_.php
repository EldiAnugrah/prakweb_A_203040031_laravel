<?php

namespace App\Models;

class Post 
{
   private static $blog_posts= [ [
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
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $Posts = static::all();
        return $Posts->firstWhere('slug', $slug);
    }
}
