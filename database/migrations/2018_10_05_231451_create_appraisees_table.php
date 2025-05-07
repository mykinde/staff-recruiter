<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppraiseesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisees', function (Blueprint $table) {
            $table->increments('id');
            $table->text('duties');
            $table->text('assignments');
            $table->string('best_performance');
            $table->string('uncomfortable');
            $table->string('opinion');
            $table->text('contributions');
            $table->string('community_engagement');
            $table->text('comments');
            $table->string('training');
            $table->integer('selfrating');
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
        Schema::drop('appraisees');
    }
}
