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
        Schema::create('multiple_choices', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('question_id');
            $table->string('value');
            $table->tinyInteger('is_correct');
            $table->integer('status');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_choices');
    }
};
