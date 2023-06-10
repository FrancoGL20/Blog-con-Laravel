<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'post_id',
    ];

    public function post()
    {
        // Un comentario pertenece a un post, el argumento es el nombre de la clase (modelo)
        return $this->belongsTo(Post::class); 
    }
}
