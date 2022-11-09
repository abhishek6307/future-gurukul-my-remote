<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsresponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolsresponses', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id');
            $table->integer('city_id');
            $table->integer('school_id');
            $table->string('school_response');
            $table->date('next_meet');
            $table->string('workshop');
            $table->string('remark');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('schoolsresponses');
    }
}
