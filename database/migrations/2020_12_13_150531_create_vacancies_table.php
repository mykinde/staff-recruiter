<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('auth_id'); //sender to all
            $table->string('title'); //Job title:
            $table->string('organization'); //Recruiting Firm
            $table->string('location'); //Job Location:
            $table->text('description')->nullable(); //Job Description:
            $table->text('requirement')->nullable(); //Required Qualification
            $table->text('duties')->nullable(); //Job Requirement:Duties:
            $table->string('category');  //Non-Teaching Positions/Academic Positions
            $table->text('method_of_application')->nullable(); //Method of Application
             $table->string('posted_on'); //Application announcement date
             $table->string('deadline'); //Application Deadline:
            $table->boolean('status')->nullable();  //staus: closed/open
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
        Schema::dropIfExists('vacancies');
    }
}
