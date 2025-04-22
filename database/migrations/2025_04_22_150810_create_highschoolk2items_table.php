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
        Schema::create('highschoolk2items', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('title');
            $table->string('alias');
            $table->unsignedBigInteger('catid');
            $table->boolean('published');
            $table->text('introtext');
            $table->text('metadesc');
            $table->timestamps();
            $table->integer('trash');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highschoolk2items');
    }
};
