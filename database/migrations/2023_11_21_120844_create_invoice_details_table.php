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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Produk')->nullable;
            $table->integer('HargaPerUnit')->nullable;            
            $table->integer('Kuantitas')->nullable;
            $table->integer('Pajak')->nullable;
            $table->integer('JumlahHargaUnit')->nullable;
            $table->integer('TotalSebelumPajak')->nullable;
            $table->integer('TotalSetelahPajak')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
