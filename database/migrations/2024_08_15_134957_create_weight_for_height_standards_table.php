<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightForHeightStandardsTable extends Migration
{
    public function up()
    {
        Schema::create('weight_for_height_standards', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['male', 'female']);
            $table->decimal('wfh',5,2);
            $table->decimal('minus_3_sd', 5, 2);
            $table->decimal('minus_2_sd', 5, 2);
            $table->decimal('minus_1_sd', 5, 2);
            $table->decimal('median', 5, 2);
            $table->decimal('plus_1_sd', 5, 2);
            $table->decimal('plus_2_sd', 5, 2);
            $table->decimal('plus_3_sd', 5, 2);

        });
    }

    public function down()
    {
        Schema::dropIfExists('weight_for_height_standards');
    }
}
