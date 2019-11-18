<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberOfRsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_of_rsos', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('rso_id');
            $table->primary(['id', 'rso_id']);
            $table->foreign('rso_id')->references('rso_id')->on('rsos');
            $table->foreign('id')->references('id')->on('users');
        
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
        Schema::dropIfExists('member_of_rsos');
    }
}
