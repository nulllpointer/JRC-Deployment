<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectongoingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectongoing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ongoingprojecttitle');
            $table->string('ongoingprojectdescription');
            $table->string('ongoingprojectlocation');
            $table->string('ongoingprojectclient');


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
        Schema::drop('projectongoing');
    }
}
