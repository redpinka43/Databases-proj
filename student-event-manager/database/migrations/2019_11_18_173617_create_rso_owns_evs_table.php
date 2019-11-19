<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsoOwnsEvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rso_owns_evs', function (Blueprint $table) {
            $table->unsignedBigInteger('rso_id');
            $table->unsignedBigInteger('event_id');
            $table->primary('event_id');
            $table->foreign('rso_id')->references('rso_id')->on('rsos');
            $table->foreign('event_id')->references('event_id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rso_owns_evs');
    }
}
