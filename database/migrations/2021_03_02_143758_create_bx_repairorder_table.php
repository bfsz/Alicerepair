<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBxRepairorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bx_repairorder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('single_no')->nullable()->comment('报修单号');
            $table->string('type')->nullable()->comment('报修类别');
            $table->text('problem_description')->nullable()->comment('问题描述');
            $table->string('dormitory_block')->nullable()->comment('寝室楼');
            $table->string('dormitory_no')->nullable()->comment('寝室号');
            $table->text('damage_photos')->nullable()->comment('损坏照片');
            $table->timestamp('single_time')->nullable()->comment('损坏时间');
            $table->integer('single_by')->nullable()->comment('报修人');
            $table->integer('repairs_by')->nullable()->comment('维修人');
            $table->integer('repair_status')->nullable()->comment('维修状态');
            $table->timestamp('completion_time')->nullable()->comment('维修完成时间');
            $table->text('repair_description')->nullable()->comment('维修说明');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bx_repairorder');
    }
}
