<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function(Blueprint $table)
        {
            $table->increments('id');  
            $table->string('name')->nullable();  
            $table->string('director')->nullable();  
            $table->string('address')->nullable();  
            $table->string('phone_number')->nullable();  
            $table->string('email')->nullable();  
            $table->string('logo')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
