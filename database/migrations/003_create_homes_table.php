<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('home_texts', function (Blueprint $table) {
            $table->string('id')->primary(); // ID custom 
            $table->text('value');
            $table->timestamps();
        });

        Schema::create('home_cards', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // Pengelompok: 'about' atau 'service'
            $table->string('icon')->nullable();    // Class FontAwesome, ex: 'fa-user-md'
            $table->string('title');
            $table->text('text')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('home_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('title');
            $table->text('text');
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('linkedin')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('home_testimonies', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('title');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_texts');
        Schema::dropIfExists('home_cards');
        Schema::dropIfExists('home_doctors');
        Schema::dropIfExists('home_testimonies');
    }

};