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
        Schema::create('invoice_headers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NomorInvoice')->nullable;
            $table->date('TanggalInvoice')->nullable;
            $table->date('TanggalBatas')->nullable;
            $table->string('MetodePembayaran')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_headers');
    }
};
