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
        Schema::create('course_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // associated teacher ID
            $table->string('program_name', 30)->nullable();
            $table->string('no_of_classes', 30)->nullable();
            $table->string('description', 500)->nullable();
            $table->string('start_date', 30)->nullable();
            $table->string('end_date', 30)->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('course_books');
    }
};
