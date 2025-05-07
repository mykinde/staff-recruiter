<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBursariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bursaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name'); //your name/
            $table->string('number'); //BVN, // Pension Fund name //Pension PIN  
            $table->string('type');  //banks all banks  all pen name
            $table->string('category'); //salary pension
            $table->timestamps();
            //Preferred Banks  // Account Number
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
        Schema::dropIfExists('bursaries');
    }
}
