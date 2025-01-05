<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('username');
            $table->text('password');
            $table->text('profilepic');
            $table->text('email');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('role');
            $table->boolean('is_admin');
            $table->boolean('is_verified');
            $table->integer('followers');
            $table->text('bio');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}