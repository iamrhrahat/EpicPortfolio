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
        Schema::create('about_models', function (Blueprint $table) {
            $table->id();
            $table->string('Section');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('skill_1')->nullable();
            $table->string('skill_1_p')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('skill_2_p')->nullable();
            $table->string('skill_3')->nullable();
            $table->string('skill_3_p')->nullable();
            $table->string('skill_4')->nullable();
            $table->string('skill_4_p')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_models');
    }
};
