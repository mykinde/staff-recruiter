<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bloodgroup'); // a,b,0,ab
            $table->string('genotype');  //AA,AO,BB,BO,AB,OO
            $table->string('hiv')->nullable();  //negative /not sure positive
            $table->string('hepatitis_b')->nullable(); //negative
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
        Schema::dropIfExists('medicals');
    }
}
