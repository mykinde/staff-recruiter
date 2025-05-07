<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->string('title');
            $table->string('date');
            $table->text('body')->nullable();
            $table->boolean('panel_siting');
            $table->text('result_of_panel')->nullable();
            $table->string('panel_date')->nullable();
            $table->string('query_file')->nullable();
            $table->string('panel_file')->nullable();
            $table->string('category'); //query  sack  suspension others
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
        Schema::dropIfExists('disciplinaries');
    }
}
