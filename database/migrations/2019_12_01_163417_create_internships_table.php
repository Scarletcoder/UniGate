<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_evaluation');
            $table->string('company_evaluation_result');
            $table->string('final_report');
            $table->string('final_report_result');
            $table->string('acceptance_form');
            $table->string('acceptance_form_result');
            $table->string('insurance_form');
            $table->string('insurance_form_result');
            $table->integer('year');
            $table->string('semester');
            $table->date('deadline');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructors');
//            $table->unsignedBigInteger('student_id');
//            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('internship');
    }
}
