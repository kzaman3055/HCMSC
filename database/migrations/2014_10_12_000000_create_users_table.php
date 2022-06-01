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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('g_name')->nullable();
            $table->string('g_nid')->nullable();

            $table->string('role')->nullable()->comment('student,teacher,admin,super_admin');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('image', 2048)->nullable();
            $table->string('religion')->nullable();
            $table->string('nid')->nullable();
            $table->date('join_date')->nullable();
            $table->integer('designation_id')->nullable();
            $table->string('class')->nullable();

            $table->date('dob')->nullable();;
            $table->string('birth_reg_num')->nullable();
            $table->string('group')->nullable();

            $table->string('session')->nullable();
            $table->string('blood_group')->nullable();


            $table->double('salary')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=inactive,1=active');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
