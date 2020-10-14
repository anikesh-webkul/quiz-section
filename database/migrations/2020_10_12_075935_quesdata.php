<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quesdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quesdata', function (Blueprint $table) {
            $table->bigIncrements('q_id');
            $table->string('q_name', 100);
            $table->string('opt1', 100);
            $table->string('opt2', 100);
            $table->string('opt3', 100);
            $table->string('opt4', 100);
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
        Schema::dropIfExists('quesdata');   
    }
}
