<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('auth_id');
            $table->integer('user_id'); //sender to all
            $table->string('job_title');  //  job title
            $table->string('current_employment_status')->nullable(); //currnet employment status: employed/self employed/unmployed
            $table->string('current_location_by_state');  //anno
            $table->text('current_location_by_city_or_localgovt'); //current location:
            $table->string('applied_date');  //  date applied: convert month day and year
            $table->string('feedback_status')->nullable()->default('pending review');  //pending reply status: approved for oral intersview and photocopoes of creditials/ try agian on next available advert / rejected for insufficinet qualification or unsolicited qualifications
            $table->boolean('cv_status')->nullable();  // Admin cv status: completed/not completed
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
        Schema::dropIfExists('applications');
    }
}
