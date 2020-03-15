<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('sid');
            $table->string('fname');
            $table->string('lname');
            $table->string('course');
            $table->string('sem');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->bigInteger('bid');
            $table->boolean('join');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
