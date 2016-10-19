<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catpages', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('catpage_author')->default(0);
            $table->string('catpage_title');
            $table->string('catpage_subtitle');
            $table->string('catpage_headerimg');
            $table->text('catpage_content');
            $table->text('catpage_faq');
            $table->string('catpage_status')->default('publish');
            $table->string('slug')->nullable();
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
        Schema::drop('catpages');
    }
}
