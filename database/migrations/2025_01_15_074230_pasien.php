<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id('id'); 
            $table->string('NIK');
            $table->string('nama_pasien');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['laki-laki', 'wanita'])->nullable();
            $table->text('penyakit');
            $table->enum('asuransi', ['BPJS', 'Asuransi A', 'Asuransi B'])->nullable();
            $table->enum('kondisi', ['sembuh', 'sakit', 'parah'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
    
};
