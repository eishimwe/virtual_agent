<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents',function(Blueprint $table){

            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cellphone');
            $table->string('email');
            $table->string('photo_url')->nullable();
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
        Schema::drop('agents');
    }
}
