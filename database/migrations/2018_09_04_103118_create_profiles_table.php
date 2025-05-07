<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('phone')->unique()->nullable();
            $table->string('title');
            $table->string('maritalstatus');
            $table->string('gender');
            $table->string('altphone')->nullable();
            $table->string('bdate');
            $table->string('edate')->nullable();   
            $table->string('offemail')->nullable();       
            $table->string('country');
            $table->string('stateoforigin'); 
            $table->string('localgovt')->nullable();
            $table->string('town')->nullable();
            $table->string('religion');
            $table->Text('address');
            $table->Text('permanentaddress')->nullable();
            $table->Text('contactaddress')->nullable();
            $table->string('denomination');
            $table->Text('branch')->nullable();
            $table->string('passport')->default('images/no-passport.jpg')->nullable();
            $table->string('partner_name')->nullable();
            $table->Text('maidenname')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
