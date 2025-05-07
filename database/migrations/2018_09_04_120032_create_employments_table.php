<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('position')->nullable();  //new
            $table->string('details')->nullable(); //as waht job description
            $table->string('designation')->nullable();
            $table->string('year')->nullable(); // employment history // date range
            $table->string('category')->nullable();  // Administrative  Lecturing industrial non-teaching technical
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**'category''position''position'
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employments');
    }
}
