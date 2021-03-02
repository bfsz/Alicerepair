<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBxPurchasebxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bx_purchasebx', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no')->default('')->comment('报销单号');
            $table->string('name')->default('')->comment('名称');
            $table->string('total_amount')->default('')->comment('总金额');
            $table->string('picture')->default('')->comment('发票照片');
            $table->integer('apply_by')->comment('申请人');
            $table->string('approved_by')->default('')->comment('审批人');
            $table->text('approval_comments')->comment('审批意见');
            $table->integer('status')->comment('报销状态');
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
        Schema::dropIfExists('bx_purchasebx');
    }
}
