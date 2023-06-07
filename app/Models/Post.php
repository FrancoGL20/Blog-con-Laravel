<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'excerpt',
        'content'
    ];

    public function comments(){
        // El argumento es el nombre de la clase (modelo)
        return $this->hasMany(Comment::class); 
    }
}
