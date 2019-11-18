<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationAtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_ats', function (Blueprint $table) {
            $table->unsignedBigInteger('lid');
            $table->unsignedBigInteger('event_id');
            $table->primary('lid');
            $table->foreign('lid')->references('lid')->on('locations');
            $table->foreign('event_id')->references('event_id')->on('events');

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
        Schema::dropIfExists('location_ats');
    }
}
