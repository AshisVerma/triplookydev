<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->text("accomodation");
            $table->text("tour");
            $table->text("fooddrink");
            $table->text("transportation");
            $table->date("start_date");
             $table->date("end_date");
             $table->text("date");
            $table->integer("status");
            $table->text("city");
            $table->string("currency");
            $table->integer("user_id");
            $table->string("user_email");

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
        Schema::dropIfExists('user_plans');
    }
}
