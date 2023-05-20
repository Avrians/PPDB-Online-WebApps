<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_calons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('agama');
            $table->enum('jenik_kelamin', ['L', 'P']);
            $table->string('email')->unique()->nullable();
            $table->string('no_telp')->unique();
            $table->string('nilai_indo');
            $table->string('nilai_mtk');
            $table->string('nilai_ing');
            $table->string('nilai_ipa');
            $table->string('jarak');
            $table->text('alamat');
            $table->string('jurusan');
            $table->string('ijazah');
            $table->string('skhun');
            $table->string('sertifikat')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('siswa_calons');
    }
};
