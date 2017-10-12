<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('movies', function (Blueprint $table) {
        $table->integer('director_id')->unsigned()->nullable();

        $table->foreign('director_id')->references('id')->on('directors');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('movies', function (Blueprint $table) {
        $table->dropForeign('movies_director_id_foreign');
        $table->dropColumn('director_id');
      });
    }
}
