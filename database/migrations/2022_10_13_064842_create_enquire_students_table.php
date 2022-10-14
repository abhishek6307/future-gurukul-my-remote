<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquireStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquire_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->tinyInteger('CheckboxWhatsapp')->default('1')->comment('0=Not-authorize,1=Authorize');
            $table->tinyInteger('CheckboxSupport')->default('1')->comment('0=Not-authorize,1=Authorize');
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
        Schema::dropIfExists('enquire_students');
    }
}
