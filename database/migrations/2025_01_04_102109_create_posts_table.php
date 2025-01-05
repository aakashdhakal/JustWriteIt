<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug_url');
            $table->dateTime('date')->default(now());
            $table->integer('comments');
            $table->integer('views');
            $table->string('thumbnail', 255);
            $table->text('content');
            $table->text('quill_delta');
            $table->string('author', 255);
            $table->boolean('status');
            $table->boolean('featured');
            $table->text('category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
}