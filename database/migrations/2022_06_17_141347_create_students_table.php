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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->uniqe()->nullable();

            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->string('class')->nullable();
            $table->string('admission_class')->nullable();
            
            $table->string('addmission_year')->nullable();

            $table->string('group')->nullable();
            $table->string('session')->nullable();

            $table->string('f_name')->nullable();
            $table->string('f_mobile_num')->nullable();
            $table->string('f_profession')->nullable();
            $table->string('f_income')->nullable();

            $table->string('m_name')->nullable();
            $table->string('m_mobile_num')->nullable();
            $table->string('m_profession')->nullable();
            $table->string('g_nid')->nullable();

            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('birth_reg_num')->nullable();
            $table->string('blood_group')->nullable();

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


            $table->tinyInteger('status')->default(1)->comment('0=inactive,1=active')->default(0);






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
        Schema::dropIfExists('students');
    }
};
