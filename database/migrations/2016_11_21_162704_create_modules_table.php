<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('studiju_forma')->nullable();
            $table->integer('kreditai')->nullable()->unsigned();
            $table->integer('T')->nullable()->unsigned();
            $table->integer('L')->nullable()->unsigned();
            $table->integer('P')->nullable()->unsigned();
            $table->integer('savarankiskas')->nullable();
            $table->string('pakopa')->nullable();
            $table->integer('semestras')->nullable()->unsigned();
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
        Schema::dropifExists('modules');
    }
}
