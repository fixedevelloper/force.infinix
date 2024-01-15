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
        Schema::create('activation_levels', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->boolean('level1')->default(false);
            $table->boolean('level2')->default(false);
            $table->boolean('level3')->default(false);
            $table->boolean('level4')->default(false);
            $table->boolean('level5')->default(false);
            $table->boolean('level6')->default(false);
            $table->boolean('level7')->default(false);
            $table->boolean('level8')->default(false);
            $table->boolean('level9')->default(false);
            $table->boolean('level10')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activation_levels');
    }
};
