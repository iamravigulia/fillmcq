<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFillmcqQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fmt_fillmcq_ques', function (Blueprint $table) {
            $table->unsignedInteger('id', true)->index();
            $table->longText('question')->nullable();
            $table->foreignId('media_id')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->string('hint')->nullable();
            $table->foreignId('difficulty_level_id')->nullable()->comment = 'id from difficulty_levels table';
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
        Schema::dropIfExists('fmt_fillmcq_ques');
    }
}
