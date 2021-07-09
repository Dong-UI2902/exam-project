<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExamAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_exam_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained("questions")->cascadeOnDelete();
            $table->foreignId('user_exam_id')->constrained("user_exams")->cascadeOnDelete();
            $table->string('answer');
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
        Schema::dropIfExists('user_exam_answers');
    }
}
