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
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('CheckoutRequestID')->nullable();
            $table->string('MerchantRequestID')->nullable();
            $table->integer('user_id')->nullable()->default(0);
            $table->unsignedInteger('referrer_id')->default(0);
            $table->unsignedInteger('commission_percentage')->default(0);
            $table->tinyInteger('cron_update')->default(0);
            $table->integer('package_id')->nullable()->default(0);
            $table->integer('topic_id')->default(0);
            $table->integer('subject_id')->nullable()->default(0);
            $table->integer('exam_id')->default(0);
            $table->unsignedInteger('lpritopic_id')->default(0);
            $table->unsignedInteger('upritopic_id')->default(0);
            $table->unsignedInteger('jsstopic_id')->default(0);
            $table->unsignedInteger('hstopic_id')->default(0);
            $table->unsignedBigInteger('online_class_id')->default(0);
            $table->string('phone_number');
            $table->integer('amount');
            $table->string('mpesa_receipt_number', 15)->nullable();
            $table->bigInteger('transaction_date')->nullable();
            $table->text('purchase_description');
            $table->longText('comments')->nullable();
            $table->boolean('transaction_completed')->default(false);
            $table->string('mpesa_first_name', 100)->nullable();
            $table->integer('created_by')->default(0);
            $table->integer('modified_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
