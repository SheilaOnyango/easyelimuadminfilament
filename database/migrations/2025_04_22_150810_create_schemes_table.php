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
        Schema::create('schemes', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->longText('description');
            $table->longText('metadescription')->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('topic_id');
            $table->string('alias', 100);
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
        Schema::dropIfExists('schemes');
    }
};
