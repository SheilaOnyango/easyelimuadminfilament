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
        Schema::create('subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('alias', 100);
            $table->string('subject_code');
            $table->longText('description');
            $table->longText('metadescription')->nullable();
            $table->unsignedBigInteger('grade_id');
            $table->string('icon_name');
            $table->integer('amount');
            $table->timestamps();
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
        Schema::dropIfExists('subjects');
    }
};
