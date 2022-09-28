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
            $table->string('course_name')->nullable(false);
            $table->foreignId('instructor_id')->references('id')->on('instructors');
            $table->string('course_img');
            $table->integer('course_price');
            $table->float('course_rate');
            $table->integer('course_lectures');
            $table->string('course_language');
            $table->longText('course_description');
            $table->enum('course_level',['All levels','Beginner','Intermediate','Expert']);
            $table->float('course_duration');
            $table->boolean('is_active');
            $table->integer('category_id');
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
        Schema::dropIfExists('courses');
    }
};
