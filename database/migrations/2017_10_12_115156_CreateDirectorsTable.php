<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration
{
    public function up()
    {
        Schema::create("directors", function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean("active")->nullable();
            $table->date("birth");
            $table->float("rating")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop("directors");
    }
}
