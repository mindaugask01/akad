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
            $table->decimal('valandos', 10, 2)->nullable()->unsigned();
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
