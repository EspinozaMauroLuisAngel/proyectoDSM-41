<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminusers', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password'); 


            $table->unsignedInteger('user_id')->nullable();            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->SoftDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminusers');
    }
};
