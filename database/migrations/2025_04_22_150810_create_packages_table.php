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
        Schema::create('packages', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('package_name');
            $table->integer('amount');
            $table->longText('package_description');
            $table->tinyInteger('status');
            $table->integer('time_value');
            $table->string('duration');
            $table->integer('items_limit');
            $table->integer('PDF_downloads_limit');
            $table->integer('pages_downloads_limit');
            $table->integer('questions_limit');
            $table->integer('videos_limit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
