<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel barangs
            $table->foreignId('barang_id')->constrained()->onDelete('cascade');

            // Jenis transaksi: masuk atau keluar
            $table->enum('jenis', ['masuk', 'keluar']);

            // Jumlah barang pada transaksi
            $table->integer('jumlah');

            // Tanggal transaksi
            $table->date('tanggal');

            // Keterangan tambahan (opsional)
            $table->string('keterangan')->nullable();

            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
