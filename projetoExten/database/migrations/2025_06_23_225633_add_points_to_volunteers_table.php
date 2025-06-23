<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPointsToVolunteersTable extends Migration
{
    public function up()
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->integer('points')->default(0);
        });
    }

    public function down()
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->dropColumn('points');
        });
    }
}
