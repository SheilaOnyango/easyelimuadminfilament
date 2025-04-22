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
        Schema::create('questions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->text('full_question');
            $table->tinyInteger('is_multiple');
            $table->string('alias', 100);
            $table->tinyInteger('is_free');
            $table->longText('answer');
            $table->integer('marks')->default(0);
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('lesson_id');
            $table->smallInteger('ai_enabled');
            $table->text('ai_before_prompt');
            $table->text('ai_after_prompt');
            $table->unsignedBigInteger('exam_subject_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
