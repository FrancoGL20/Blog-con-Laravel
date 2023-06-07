<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        // Obtener todos los posts de la base de datos
        $posts = Post::get();
        
        // Enviar los posts a la vista welcome
        return view('welcome', [
            'posts' => $posts
        ]);
    }
}
