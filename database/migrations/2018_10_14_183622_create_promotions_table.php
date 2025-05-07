<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->string('old_status');
            $table->string('new_status');
            $table->string('date');
            $table->string('effective_date');
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('file')->nullable();
            $table->string('category'); //Redeployment Promotion
            $table->string('department')->nullable(); //Redeployment purpose
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
        Schema::dropIfExists('promotions');
    }
}
