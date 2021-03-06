<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFillmcqAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fmt_fillmcq_ans', function (Blueprint $table) {
            $table->unsignedInteger('id', true)->index();
            $table->foreignId('question_id');
            $table->longText('answer');
            $table->tinyInteger('active')->default(1);
            $table->foreignId('media_id')->nullable();
            $table->tinyInteger('arrange')->default(0);
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
        Schema::dropIfExists('fmt_fillmcq_ans');
    }
}
