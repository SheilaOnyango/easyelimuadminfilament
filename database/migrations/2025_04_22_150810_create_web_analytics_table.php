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
        Schema::create('web_analytics', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->date('date');
            $table->unsignedBigInteger('nb_uniq_visitors');
            $table->unsignedBigInteger('nb_users');
            $table->unsignedBigInteger('nb_visits');
            $table->unsignedBigInteger('nb_actions');
            $table->unsignedBigInteger('nb_visits_converted');
            $table->unsignedBigInteger('bounce_count');
            $table->bigInteger('sum_visit_length');
            $table->unsignedBigInteger('max_actions')->nullable();
            $table->text('bounce_rate');
            $table->decimal('nb_actions_per_visit', 5);
            $table->decimal('avg_time_on_site');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_analytics');
    }
};
