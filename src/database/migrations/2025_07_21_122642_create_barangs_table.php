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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                      // Nama barang
            $table->string('satuan')->default('unit');   // Satuan
            $table->integer('stok')->default(0);         // Stok saat ini
            $table->integer('stok_minimum')->default(5); // Ambang stok minimum
            $table->text('keterangan')->nullable(); // Tambahkan ini
            $table->foreignId('kategori_barang_id')->constrained()->onDelete('cascade'); // Relasi ke kategori
            $table->timestamps();                        // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
