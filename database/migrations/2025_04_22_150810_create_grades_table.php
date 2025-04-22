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
        Schema::create('grades', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->tinyInteger('type');
            $table->string('alias', 100);
            $table->unsignedBigInteger('level_id');
            $table->timestamps();
            $table->string('description', 50);
            $table->longText('metadescription')->nullable();
            $table->integer('status');
            $table->integer('created_by');
            $table->integer('modified_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
