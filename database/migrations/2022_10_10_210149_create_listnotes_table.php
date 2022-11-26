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
        Schema::create('listnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('listdescription');
            $table->binary('image');
            $table->dateTime('remind',0);

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
        Schema::dropIfExists('listnotes');
    }
};
