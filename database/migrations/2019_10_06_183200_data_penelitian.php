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
            $table->increments('id');
            $table->string('judul');
            $table->string('penulis');
            $table->string('publis');
            $table->string('tahun');
            $table->string('url');
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
