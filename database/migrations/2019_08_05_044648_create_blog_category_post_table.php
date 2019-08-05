<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoryPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_category_id')->unsigned();
            $table->integer('blog_post_id')->unsigned();

            $table->foreign('blog_category_id')->references('id')->on('blog_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('blog_post_id')->references('id')->on('blog_posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_category_post');
    }
}
