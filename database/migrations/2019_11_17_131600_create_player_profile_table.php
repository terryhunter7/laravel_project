<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('player_name');
            $table->longText('bio');
            $table->string('image');
            $table->integer('age');
            $table->text('position');
            $table->unsignedBigInteger('player_id');
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
        Schema::dropIfExists('player_profile');
    }
}
