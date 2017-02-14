<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads',function(Blueprint $table){

            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->integer('agent_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('agent_id')->references('id')->on('agents');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('subject');
            $table->text('description');
            $table->string('email');
            $table->boolean('active')->default(1);
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
        Schema::drop('leads');
    }
}
