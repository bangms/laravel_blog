<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->text('writer');
            $table->text('subject');
            $table->text('content');
            $table->timestamps();
            $table->integer('readcount')->nullable();
            $table->integer('ref')->nullable(); // 원본 글의 고유 번호
            $table->integer('re_sort')->nullable(); // 정렬 순서
            $table->integer('re_depth')->nullable(); // 답글 레벨
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
