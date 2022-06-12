<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locatie', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('coordinaten');
            $table->string('beschrijving');
            $table->string('foto');
            $table->boolean('gehaald')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locatie');
    }
}
