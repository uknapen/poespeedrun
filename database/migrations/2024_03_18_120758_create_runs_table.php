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
        Schema::create('runs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('player');
            $table->string('time');
            $table->string('timeH')->nullable();
            $table->string('timeM')->nullable();
            $table->string('timeS')->nullable();
            $table->string('date')->nullable();
            $table->string('dateCreate');
            $table->string('category');
            $table->string('class');
            $table->string('version');
            $table->string('archetype');
            $table->string('deathless');
            $table->string('url')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('runs');
    }
};
