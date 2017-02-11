<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties',function(Blueprint $table){

            $table->increments('id');
            $table->integer('suburb_id')->unsigned();
            $table->integer('property_type_id')->unsigned();
            $table->foreign('suburb_id')->references('id')->on('suburbs');
            $table->foreign('property_type_id')->references('id')->on('suburbs');
            $table->text('description');
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
        Schema::drop('properties');
    }
}
