<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_users', function (Blueprint $table) {
        	$table->string('jenis_kelamin')->nullable();
        	$table->string('tmpt_lahir')->nullable();
        	$table->string('namapt')->nullable();
        	$table->string('namaprodi')->nullable();
        	$table->string('statuskeaktifan')->nullable();
        	$table->string('pend_tinggi')->nullable();
        	$table->string('fungsional')->nullable();
        	$table->string('ikatankerja')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_users', function (Blueprint $table) {
        });
    }
}
