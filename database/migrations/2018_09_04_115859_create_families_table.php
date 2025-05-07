<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender');
            $table->string('relationship')->nullable();// son daughter wife husband dad mum etc
            $table->string('occupation')->nullable();
            $table->boolean('nextofkin')->nullable();
            $table->text('address')->nullable();
            $table->string('birth')->nullable();
            $table->string('type'); // Next of kin/ Mariter Partner //Family
            $table->string('numberofchilds')->nullable();  //number->first()
            // Next of Kin, Partber name, name of children //name of spouse
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
        Schema::dropIfExists('families');
    }
}
