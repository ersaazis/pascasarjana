<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPenelitian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penelitian', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->text('judul')->nullable();
            $table->text('penulis')->nullable();
            $table->text('publis')->nullable();
            $table->text('tahun')->nullable();
            $table->text('url')->nullable();
            $table->integer('titasi')->nullable();
            $table->text('url_titasi')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('cms_users')->onDelete('cascade');
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
        Schema::dropIfExists('data_penelitian');
    }
}
