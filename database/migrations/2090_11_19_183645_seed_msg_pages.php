<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Record;
use App\Models\PhoneList;

class SeedMsgPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $phone=new PhoneList();
        $phone->uid = 1;
        $phone->phoNum='13543859557';
        $phone->save();
        $phone=new PhoneList();
        $phone->uid = 1;
        $phone->phoNum='17367109416';
        $phone->save();

        $record=new Record();
        $record->uid=1;
        $record->tittle='测试任务';
        $record->context='哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈我复习不完了啊';
        $record->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
