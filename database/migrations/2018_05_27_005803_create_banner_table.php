<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            //名称
            $table->string('title')->nullable();
            //别名
            $table->string('url')->nullable();
            //显示顺序
            $table->integer('order')->nullable();
            //一级二级状态
            $table->integer('rank')->default(0);

            $table->integer('type_id')->nullablke();

            $table->integer('type')->nullable();// 1 全部文章  2图文 3视频 4自定义链接 5页面 6首页
            //上一级
            $table->integer('pre_id')->default(-1);
            //自定义链接
            $table->string('href')->nullable();

            $table->integer('show')->default(0);

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
        Schema::dropIfExists('banner');
    }
}
