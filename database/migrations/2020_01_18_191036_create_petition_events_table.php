<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petition_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event');
            $table->unsignedBigInteger('petition_id');
            $table->foreign('petition_id')->references('id')->on('petitions');
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
        Schema::dropIfExists('petition_events');
    }
}
