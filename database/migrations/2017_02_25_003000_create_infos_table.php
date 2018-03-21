<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->text('short_bio');
            $table->string('image');
            $table->string('resume');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('bitbucket')->nullable();
            $table->smallInteger('projects_done')->unsigned();
            $table->smallInteger('happy_clients')->unsigned();
            $table->smallInteger('experience_years')->unsigned();
            $table->smallInteger('countries_served')->unsigned();
            $table->text('map_pin');
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
        Schema::dropIfExists('infos');
    }
}
