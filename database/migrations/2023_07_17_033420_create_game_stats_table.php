<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bdl_id");
            $table->integer("ast");
            $table->integer("blk");
            $table->integer("dreb");
            $table->integer("fg3_pct");
            $table->integer("fg3a");
            $table->integer("fg3m");
            $table->integer("fg_pct");
            $table->integer("fga");
            $table->integer("fgm");
            $table->integer("ft_pct");
            $table->integer("fta");
            $table->integer("ftm");
            $table->string("min");
            $table->integer("oreb");
            $table->integer("pf");
            $table->integer("pts");
            $table->integer("reb");
            $table->integer("stl");
            $table->integer("turnover");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_stats');
    }
};
