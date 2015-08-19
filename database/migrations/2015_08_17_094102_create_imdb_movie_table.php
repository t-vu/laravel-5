<?php
/**
 * get movie data from imdb through the below API
 * http://www.omdbapi.com/
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImdbMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imdb_movie', function (Blueprint $table) {
            $table->string("title",200);
            $table->integer("year");
            $table->char("rated",10);
            $table->dateTime("released");
            $table->string("runtime");
            $table->string("genre");
            $table->string("director");
            $table->string("writer");
            $table->string("actors");
            $table->text("plot");
            $table->string("language");
            $table->string("country");
            $table->string("awards");
            $table->string("poster");
            $table->string("metascore");
            $table->string("imdbRating");
            $table->string("imdbVotes");
            $table->string("imdbID");
            $table->string("seriesID");
            $table->string("type");
            $table->string("response");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop("imdb_movie");

    }
}
