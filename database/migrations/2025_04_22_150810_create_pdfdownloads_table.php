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
        Schema::create('pdfdownloads', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('exam_id')->default(0);
            $table->unsignedInteger('topic_id')->default(0);
            $table->unsignedInteger('hstopic_id')->default(0);
            $table->unsignedInteger('jsstopic_id')->default(0);
            $table->unsignedInteger('upritopic_id')->default(0);
            $table->unsignedInteger('lpritopic_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdfdownloads');
    }
};
