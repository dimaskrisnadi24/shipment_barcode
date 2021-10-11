<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datanasabah', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->text('alamat');
            $table->integer('notelp');
            $table->integer('totalsampah');
            $table->integer('totalsaldo');
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
        Schema::dropIfExists('datanasabah');
    }
}
