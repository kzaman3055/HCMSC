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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->uniqe()->nullable();
            
            $table->string('name')->nullable();
            $table->string('nid')->nullable();
            $table->date('dob')->nullable();
            $table->date('join_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('mobile')->nullable();
            $table->string('blood_group')->nullable();

            $table->string('f_name')->nullable();
            $table->string('f_profession')->nullable();
 

            $table->string('m_name')->nullable();
            $table->string('m_profession')->nullable();





            $table->string('present_address')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_thana')->nullable();
            $table->string('present_poffice')->nullable();
            $table->string('present_pcode')->nullable();

            $table->string('permanent_address')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_thana')->nullable();
            $table->string('permanent_poffice')->nullable();
            $table->string('permanent_pcode')->nullable();


            $table->string('image', 2048)->nullable();



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
        Schema::dropIfExists('teachers');
    }
};
