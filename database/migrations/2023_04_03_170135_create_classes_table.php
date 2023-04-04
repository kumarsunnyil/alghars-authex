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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_user_id'); // associated teacher ID
            $table->unsignedBigInteger('course_id'); // associated teacher ID
            $table->string('days_of_week', 150)->nullable();
            $table->string('start_date', 30)->nullable();
            $table->string('end_date', 30)->nullable();
            $table->timestamps();
            $table->foreign('student_user_id')->references('id')->on('student_users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
