<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string('company')->comment('회사명');
            $table->unsignedTinyInteger('category')->comment('카테고리');
            $table->boolean('day')->comment('당일 여부');
            $table->string('paper')->comment('용지');
            $table->string('impression')->comment('인쇄도수');
            $table->string('sheet')->comment('수량 매');
            $table->string('case')->comment('수량 건');
            $table->string('type')->nullable()->comment('수량 건');
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
        Schema::dropIfExists('info');
    }
}
