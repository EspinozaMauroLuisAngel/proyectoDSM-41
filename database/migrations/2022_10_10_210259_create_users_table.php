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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');    
            $table->string('password');
            
            $table->unsignedInteger('note_id')->nullable();              
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('cascade');

            $table->unsignedInteger('listnote_id')->nullable();              
            $table->foreign('listnote_id')->references('id')->on('listnotes')->onDelete('cascade');

            $table->unsignedInteger('imagenote_id')->nullable();              
            $table->foreign('imagenote_id')->references('id')->on('imagenotes')->onDelete('cascade');

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
        Schema::dropIfExists('users');
    }
};


