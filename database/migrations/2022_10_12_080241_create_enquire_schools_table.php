<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquireSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquire_schools', function (Blueprint $table) {
            $table->id();
            $table->string('role_at_school');
            $table->string('name');
            $table->string('number');
            $table->string('state_name');
            $table->string('school_medium');
            $table->string('students_strength');
            $table->tinyInteger('auth_phone')->default('1')->comment('0=Not-authorize,1=Authorize');
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
        Schema::dropIfExists('enquire_schools');
    }
}
