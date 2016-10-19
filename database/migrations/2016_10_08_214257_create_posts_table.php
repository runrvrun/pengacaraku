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
            $table->bigInteger('post_author')->default(0);
            $table->dateTime('post_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->longText('post_content');
            $table->text('post_title');
            $table->string('post_status',20)->default('publish');
            $table->string('comment_status',20)->default('open');            
            $table->string('slug',200)->nullable;            
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
        Schema::drop('posts');
    }
}
