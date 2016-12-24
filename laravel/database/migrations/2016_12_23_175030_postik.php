<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Postik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::drop('postik');

        Schema::create('postik', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('post_cat_id')->unsigned()->default('0');
            $table->integer('post_author_id')->unsigned()->default('0');
            $table->integer('post_status')->unsigned()->default('0');
            $table->string('post_title', 255)->unique();
            $table->string('post_altname', 255)->unique();
            $table->string('post_url', 255)->unique();
            $table->string('post_img', 255)->default('standart-picture');
            $table->string('post_keywords', 255);
            $table->string('post_description');
            $table->text('post_text');
            $table->date('post_date');
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->integer('post_views')->nullable()->unsigned();
            $table->float('post_ratio')->nullable();
            $table->smallInteger('post_ratioj')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('postik');
    }
}
