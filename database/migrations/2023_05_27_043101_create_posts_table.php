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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->nullable();
            $table->string('slug', 500)->nullable();
            $table->text('description', 500)->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('publicado', ['Yes', 'Not'])->nullable()->default('Not');
            $table->timestamps();

            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
