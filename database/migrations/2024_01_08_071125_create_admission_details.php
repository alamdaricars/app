<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('turn_id');
            $table->text('problem');
            $table->dateTime('Service_date');
            $table->dateTime('Announced_date_of_delivery');
            $table->text('Expert_opinion');
            $table->integer('status');
            $table->integer('type');
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
        Schema::dropIfExists('admission_details');
    }
}
