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
        Schema::create('oldcontent_subscriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('hstopic_id')->default(0);
            $table->unsignedBigInteger('jsstopic_id')->default(0);
            $table->unsignedBigInteger('upritopic_id')->nullable()->default(0);
            $table->unsignedBigInteger('lpritopic_id')->default(0);
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oldcontent_subscriptions');
    }
};
