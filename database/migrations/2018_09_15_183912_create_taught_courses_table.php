<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaughtCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taught_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('course_code');
            $table->string('course_title');
            $table->string('credits');
            $table->string('no_of_students')->nullable();
            $table->string('percentage_of_involvement');  //25 33 50 100
            $table->string('institution');
            $table->string('department')->nullable();
            $table->string('category')->nullable(); //fulltime adjunct sabbatical 
            $table->softDeletes();
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
        Schema::dropIfExists('taught_courses');
    }
}
