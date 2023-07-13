<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTeamIdDataTypeInPlayersTable extends Migration
{
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->integer('team_id')->nullable()->change();
        });
    }
}
