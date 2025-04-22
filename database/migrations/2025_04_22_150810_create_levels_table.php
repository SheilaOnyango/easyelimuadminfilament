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
        Schema::create('levels', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->tinyInteger('type');
            $table->longText('description')->nullable();
            $table->longText('metadescription')->nullable();
            $table->string('alias', 100);
            $table->timestamps();
            $table->string('image_name')->nullable();
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levels');
    }
};
