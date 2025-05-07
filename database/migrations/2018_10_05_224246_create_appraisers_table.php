<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppraisersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quality');
            $table->integer('productivity');
            $table->integer('punctuality');
            $table->integer('communication');
            $table->integer('contribution');
            $table->integer('public');
            $table->integer('expertise');
            $table->integer('administrativs');
            $table->integer('user_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appraisers');
    }
}
