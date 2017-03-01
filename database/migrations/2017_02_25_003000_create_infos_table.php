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
            $table->smallInteger('projects_done')->unsigned();
            $table->smallInteger('happy_clients')->unsigned();
            $table->smallInteger('experience_years')->unsigned();
            $table->smallInteger('countries_served')->unsigned();
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
