<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee__profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('dob');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('profile_image');
            $table->string('marital_status');
            $table->string('gender');
            $table->string('address');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('credentials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee__profiles');
    }
}
