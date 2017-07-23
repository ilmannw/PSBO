<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nama_siswa', 100);
            $table->string('nisn', 50)->unique();
            $table->string('nik', 50);
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir', 255);
            $table->string('agama', 255);
            $table->string('kebutuhan_khusus', 255);
            $table->text('alamat');
            $table->string('jenis_tinggal',255);
            $table->string('alat_transportasi',255);
            $table->string('nomor_telepon',20);
            $table->string('email',255);
            $table->string('nomor_kps',100);
            $table->enum('status', ['Aktif','Tidak Aktif']);

            $table->string('nama_ayah',255);
            $table->string('nama_ibu',255);
            $table->string('pend_ayah',20);
            $table->string('pend_ibu',20);
            $table->integer('penghasilan_ayah');
            $table->integer('penghasilan_ibu');

            $table->integer('id_kelas')->unsigned();
            $table  ->foreign('id_kelas')
                    ->references('id')
                    ->on('kelas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->string('foto')->nullable();

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
        Schema::drop('siswa');
    }
}
