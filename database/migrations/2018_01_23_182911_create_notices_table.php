<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ongoingprojecttitle');
            $table->string('ongoingprojectdescription');
            $table->string('ongoingprojectlocation');
            $table->string('ongoingprojectclient');
            $table->string('completedprojecttitle');
            $table->string('completedprojectdescription');
            $table->string('completedprojectlocation');
            $table->string('completedprojectclient');
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
        Schema::drop('notices');
    }
}
