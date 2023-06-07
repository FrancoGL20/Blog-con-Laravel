<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id') // Hace referencia al id de la tabla posts
                ->on('posts') // Hace referencia a la tabla posts
                ->onUpdate('cascade') // Si se actualiza el id de un post, se actualiza el id del comentario
                ->onDelete('cascade'); // Si se elimina un post, se eliminan los comentarios asociados a ese post
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
