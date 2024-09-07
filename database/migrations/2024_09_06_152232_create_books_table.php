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
            $table->string('url');
            $table->string('age_limit');
            $table->string('author')->nullable();
            $table->text('description')->nullable();
            // $table->string('genre')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->string('cover_image_url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('slug');
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     
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
