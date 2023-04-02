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
        Schema::create('student_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
           // $table->foreignId('user_id')->nullable();

            // $table->foreignId('otherclass_id')->index()->constrained()->cascadeOnDelete();

            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('grade')->nullable();
            $table->string('p_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('program_name')->nullable();
            $table->string('message')->nullable();
            $table->boolean('is_active')->default(0);// TODO once the email is verified the user becomes active
            $table->boolean('is_evaluated')->default(0);// TODO once the email is verified the user becomes active
            $table->unsignedBigInteger('evaluator_user_id')->default(1); // admin
            $table->timestamp('email_verified_at')->nullable(); //
            $table->boolean('is_email_verified')->default(0); //
            $table->timestamps();

            $table->foreign('evaluator_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_users');
    }
};
