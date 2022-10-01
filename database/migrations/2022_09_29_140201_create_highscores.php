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
        Schema::create('highscores', function (Blueprint $table) {
            $table->string('name');
            $table->integer('best_time_1');
            $table->integer('best_time_2');
            $table->integer('best_time_3');
            $table->integer('best_time_4');
            $table->integer('best_time_5');
            $table->integer('best_time_6');
            $table->integer('best_time_7');
            $table->integer('best_time_8');
            $table->integer('best_time_9');
            $table->integer('best_time_10');
            $table->integer('best_time_11');
            $table->integer('best_time_12');
            $table->integer('best_time_13');
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
        Schema::dropIfExists('highscores');
    }
};
