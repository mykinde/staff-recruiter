<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('staffid')->unique()->nullable();
            $table->string('department');
            $table->string('college');
            $table->string('office')->nullable();
            $table->string('designation')->nullable();
            $table->string('level')->nullable();
            $table->string('step')->nullable();
            $table->string('promotion')->nullable();
            $table->string('dateemployed')->nullable();
            $table->string('category')->default('Temporary'); //permanent sabatical, sabbatical, contract
            $table->string('categorization'); //academic senior junior
            $table->string('salary')->nullable();
            $table->text('qualification_at_point_employment')->nullable(); //details in full //new
             //details in full //new
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
        Schema::dropIfExists('careers');
    }
}
