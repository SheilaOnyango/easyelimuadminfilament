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
        Schema::create('lessons', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('title');
            $table->longText('lesson_objectives');
            $table->longText('lesson_notes');
            $table->string('video_url');
            $table->string('animation_url');
            $table->string('alias', 100);
            $table->smallInteger('is_free');
            $table->integer('status');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->unsignedBigInteger('sub_topic_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
