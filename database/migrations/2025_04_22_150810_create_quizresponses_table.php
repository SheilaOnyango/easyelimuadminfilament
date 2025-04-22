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
        Schema::create('quizresponses', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('question_id');
            $table->integer('choice_id');
            $table->tinyInteger('is_user_correct_answer');
            $table->integer('user_id');
            $table->integer('lesson_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizresponses');
    }
};
