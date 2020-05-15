<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titre');
            $table->string('Contenue');           
            $table->string('Status');
            $table->string('Images');
            $table->string('Videos');
            $table->integer('Votes');
            $table->Date('Date');
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
        Schema::dropIfExists('idees');
    }
}
