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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('id_author');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_rating');
            $table->foreign('id_author')->references('author_id')->on('authors')->onDelete('cascade');
            $table->foreign('id_category')->references('category_id')->on('categories')->onDelete('cascade');
            $table->foreign('id_rating')->references('rating_id')->on('ratings')->onDelete('cascade');
            $table->integer('price');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
