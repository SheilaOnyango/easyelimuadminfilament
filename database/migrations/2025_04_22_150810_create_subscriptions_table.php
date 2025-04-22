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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('subject_id')->default(0);
            $table->unsignedBigInteger('payment_id')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->integer('package_id')->nullable();
            $table->tinyInteger('reminder_sent')->default(0)->comment('Indicates if an SMS reminder has been sent for expired subscription');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
