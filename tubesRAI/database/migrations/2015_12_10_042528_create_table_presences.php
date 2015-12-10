<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePresences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim_participant');
            $table->string('nim_tutor');
            $table->unsignedInteger('id_activity');
            $table->unsignedInteger('shift');
            $table->timestamps();

            $table->foreign('nim_participant')->references('nim')->on('participants')->onDelete('CASCADE');
            $table->foreign('nim_tutor')->references('nim')->on('tutors')->onDelete('CASCADE');
            $table->foreign('id_activity')->references('id')->on('activities')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('presences');
    }
}
