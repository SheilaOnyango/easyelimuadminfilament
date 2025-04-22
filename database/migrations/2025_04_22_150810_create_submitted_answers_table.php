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
        Schema::create('submitted_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('user_id');
            $table->integer('question_id');
            $table->longText('user_response');
            $table->integer('choice_id');
            $table->tinyInteger('is_user_correct_answer');
            $table->longText('marking_scheme_answer');
            $table->longText('chat_gpt_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submitted_answers');
    }
};
