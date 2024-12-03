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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->integer('rating');
            $table->unsignedBigInteger('id_book');
            $table->unsignedBigInteger('id_author');
            $table->foreign('id_author')->references('author_id')->on('authors')->onDelete('cascade');
            // $table->foreign('id_book')->references('book_id')->on('books')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
