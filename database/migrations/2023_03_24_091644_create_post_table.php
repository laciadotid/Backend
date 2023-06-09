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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('metaDescription');
            $table->string('featuredImage');
            $table->string('date');
            $table->longtext('content');
            $table->integer('status');
            $table->unsignedBigInteger('post_author');
            $table->foreign('post_author')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('post_category');
            $table->foreign('post_category')->references('id')->on('category')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
