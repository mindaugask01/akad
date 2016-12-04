<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Valandos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valandos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->nullable()->unsigned();
            $table->integer('module_id')->nullable()->unsigned();
            $table->integer('kruvis_id')->nullable()->unsigned();
            $table->decimal('valandos', 10, 2)->nullable()->unsigned();
            $table->integer('T')->nullable()->unsigned();
            $table->integer('P')->nullable()->unsigned();
            $table->integer('L')->nullable()->unsigned();
            $table->integer('savarankiskas')->nullable()->unsigned();

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
        Schema::dropIfExists('valandos');
    }
}
