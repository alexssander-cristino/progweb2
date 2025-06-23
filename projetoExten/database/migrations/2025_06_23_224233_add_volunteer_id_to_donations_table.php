<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVolunteerIdToDonationsTable extends Migration
{
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->unsignedBigInteger('volunteer_id')->nullable()->after('id');
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropForeign(['volunteer_id']);
            $table->dropColumn('volunteer_id');
        });
    }
}
