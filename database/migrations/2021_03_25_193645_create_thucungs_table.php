<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThucungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thucungs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('dotuoi');
            $table->string('gioitinh');
            $table->string('loai');
            $table->string('kichco');
            $table->string('suckhoe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thucungs');
    }
}
