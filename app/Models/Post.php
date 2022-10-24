<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}

// Post::create([
//     'title'=>'Judul Ke Tiga',
//     'category_id'=>3, 
//     'slug'=>'judul-ke-ke-tiga',
//     'excerpt'=>'Lorem ipsum ke tiga',
//     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam recusandae reprehenderit quae, dicta placeat alias quod tenetur repudiandae mollitia commodi vitae maiores fugiat, quidem harum molestias. Consequatur amet rerum veniam! Inventore, est natus? </p><p>Dignissimos nobis voluptatem, consequuntur aliquam molestiae nesciunt ipsa voluptatibus fuga, nam voluptatum, sunt facere? Voluptatem aut iusto in maiores, sunt beatae dolores maxime natus, commodi esse aliquid iste ea minima inventore. Iste commodi cumque excepturi possimus explicabo quas quasi est ipsa suscipit optio accusantium nihil deserunt autem, atque eligendi quisquam, tempore corrupti quia sapiente blanditiis </p><p>expedita quis quam temporibus. Architecto repellat perspiciatis, iste rerum voluptates iusto tempore qui eveniet, sunt fuga corporis assumenda totam doloribus cupiditate incidunt, pariatur quis beatae sapiente quae distinctio odit dolor eius libero dignissimos. Possimus distinctio similique corrupti laboriosam quibusdam eveniet odit, atque nostrum deleniti earum quo recusandae alias tempore hic voluptatibus temporibus non ipsum cum. Quam distinctio, eos cumque maiores aut nam?</p>'
// ])

// Post::create([
//     'name'=>'Web Desain',
//     'slug'=>'web-desain'])


