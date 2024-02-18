<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('question');

            $table->string('answer',500);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
