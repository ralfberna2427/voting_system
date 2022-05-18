<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            
            $table->string('Username');
            $table->string('Password');

            $table->string('Date_of_birth');
            $table->string('Gender');
            $table->string('Course');

            $table->string('Email');
            $table->string('Mnumber');

            $table->string('Barangay');
            $table->string('City');
            $table->string('Province');
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
        Schema::dropIfExists('user_tables');
    }
};
