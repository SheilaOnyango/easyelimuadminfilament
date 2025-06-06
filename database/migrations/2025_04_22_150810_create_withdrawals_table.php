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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('user_id');
            $table->integer('amount');
            $table->string('withdrawto_phonenumber');
            $table->dateTime('withdrawalrequest_datetime');
            $table->boolean('completed')->default(false);
            $table->dateTime('completed_datetime')->nullable();
            $table->integer('withdrawal_approvedby')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
