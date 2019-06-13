<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('文章标题');
            $table->longText('content')->comment('文章内容');
            $table->longText('html')->nullable()->comment('markdown转化为html展示');
            $table->integer('category_id')->default(0)->comment('文章分类');
            $table->integer('tag_id')->nullable()->comment('文章标签');
            $table->unsignedInteger('visibility')->comment('可见性,公开/私密/加密/置顶');
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
