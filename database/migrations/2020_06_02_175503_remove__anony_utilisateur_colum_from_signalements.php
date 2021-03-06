<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveAnonyUtilisateurColumFromSignalements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signalements', function (Blueprint $table) {
            $table->dropColumn('AnonyUtilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signalements', function (Blueprint $table) {
            $table->integer('AnonyUtilisateur')->after('Date');
        });
    }
}
