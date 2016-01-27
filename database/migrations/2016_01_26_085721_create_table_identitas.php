<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIdentitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('identitas',function(Bluprint $table) {
            $table->increments('nama');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('tanggal_masuk');
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
        Shcema::drop('identitas');
    }
}
