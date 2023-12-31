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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('socialmedia_1_link')->nullable();
            $table->string('socialmedia_1_icon')->nullable();
            $table->string('socialmedia_2_link')->nullable();
            $table->string('socialmedia_2_icon')->nullable();
            $table->string('socialmedia_3_link')->nullable();
            $table->string('socialmedia_3_icon')->nullable();
            $table->string('socialmedia_4_link')->nullable();
            $table->string('socialmedia_4_icon')->nullable();
            $table->string('socialmedia_5_link')->nullable();
            $table->string('socialmedia_5_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfos');
    }
};
