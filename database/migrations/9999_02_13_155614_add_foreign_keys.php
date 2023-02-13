<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // VERSIONE 1
            // creato user_id in post con le stesse caratteristiche dell'id, quindi bigint
            // $table->bigInteger('user_id')->unsigned();

            // creato collegamento tra post e user 
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users');

            // VERSIONE 2
            $table->foreignId('user_id')
                ->constrained();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};