<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_questions', function (Blueprint $table) {
          $table->increments('question_id');
            $table->string('subject');
            $table->string('semester');
            $table->string('question_description');
            $table->string('question_file');
            $table->unsignedInteger('user_id');
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('old_questions');
    }
}
