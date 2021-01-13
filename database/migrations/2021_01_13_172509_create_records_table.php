<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('uid')->unsigned()->default(1)->comment('操作者id');
            $table->integer('status')->unsigned()->default(0)->comment('任务状态');
            $table->string('tittle', 100)->nullable()->default('空事件')->comment('操作名称');
            $table->text('context')->nullable()->comment('操作内容');
            $table->text('target', 100)->nullable()->comment('提醒人');
            $table->text('sendTime')->nullable()->comment('发送时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
