<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            //$table->integer('employee_name');
            $table->string('uniform');
            $table->string('winter_clothes');
            $table->string('shoes');
            $table->string('other');
            $table->string('memo');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('empoloyees')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
