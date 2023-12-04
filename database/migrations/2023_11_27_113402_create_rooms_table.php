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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->char('slug')->uniqid();
            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();
            $table->string('short_discrbution')->nullable();
            $table->text('discrbution')->nullable();
            $table->double('price')->default('0');
            $table->tinyInteger('is_published')->default('1');
            $table->tinyInteger('is_discounted')->default('1');
            $table->integer('beds');
            $table->unsignedBigInteger('room_category_id');
            $table->timestamps();

            $table->foreign('room_category_id')->references('id')->on('room_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};