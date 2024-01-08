<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_records', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('admission_id');
            $table->text('problem');
            $table->text('Acceptance_details');
            $table->dateTime('Service_date');
            $table->dateTime('Delivery_Date');
            $table->integer('warranty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_repair_records');
    }
}
