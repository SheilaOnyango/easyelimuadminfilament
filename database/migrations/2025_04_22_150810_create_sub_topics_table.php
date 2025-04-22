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
        Schema::create('sub_topics', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->unsignedBigInteger('topic_id');
            $table->longText('description');
            $table->longText('metadescription')->nullable();
            $table->string('alias', 100);
            $table->integer('created_by');
            $table->integer('status');
            $table->timestamps();
            $table->integer('modified_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_topics');
    }
};
