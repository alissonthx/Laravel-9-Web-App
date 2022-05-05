<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team_id')->references('id')->on('teams');
            $table->foreignId('away_team_id')->references('id')->on('teams');
            $table->foreignId('championship_id')->references('id')->on('championships');
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->unsignedBigInteger('loser_id')->nullable();
            $table->unsignedBigInteger('winner_score')->nullable();
            $table->unsignedBigInteger('loser_score')->nullable();
            $table->enum('round', ['QF', 'SF', 'F']);
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
        Schema::dropIfExists('games');
    }
};
