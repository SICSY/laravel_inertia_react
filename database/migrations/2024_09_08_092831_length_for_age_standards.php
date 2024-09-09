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
        Schema::create('length_for_age_standards', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['male', 'female']);
            $table->integer('age_months');
            $table->decimal('minus_3_sd', 5, 2);
            $table->decimal('minus_2_sd', 5, 2);
            $table->decimal('minus_1_sd', 5, 2);
            $table->decimal('median', 5, 2);
            $table->decimal('plus_1_sd', 5, 2);
            $table->decimal('plus_2_sd', 5, 2);
            $table->decimal('plus_3_sd', 5, 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('length_for_age_standards');
    }
};
