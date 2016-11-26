<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKruvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kruvis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigned()->nullable();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->integer('grupe_id')->unsigned()->nullable();
            $table->foreign('grupe_id')->references('id')->on('grupes');
            $table->integer('teacher_id')->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->integer('teor')->nullable()->unsigned();
            $table->integer('prat')->nullable()->unsigned();
            $table->integer('lab')->nullable()->unsigned();
            $table->decimal('savarankiskas', 10, 2)->nullable()->unsigned();
            $table->decimal('viso_val', 10, 2)->nullable()->unsigned();
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
        Schema::dropIfExists('kruvis');
    }
}
