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
        Schema::create('sets', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('term_id');
            $table->string('sets');
            $table->string('alias', 100);
            $table->integer('set_price');
            $table->integer('price_per_exam');
            $table->longText('description');
            $table->longText('metadescription')->nullable();
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
        Schema::dropIfExists('sets');
    }
};
