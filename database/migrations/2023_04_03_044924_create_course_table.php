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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_book_id'); // associated coursebook ID
            $table->unsignedBigInteger('user_id');
            $table->string('program_name', 30)->nullable();
            $table->string('total_no_of_classes', 30)->nullable();
            $table->string('description', 500)->nullable();
            $table->timestamps();
            $table->foreign('course_book_id')->references('id')->on('course_book')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
