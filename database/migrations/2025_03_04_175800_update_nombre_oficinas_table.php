<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('oficinas', function (Blueprint $table) {
            $table->string('nombre')->nullable(false)->change(); // Hace el campo obligatorio
        });
    }

    public function down(): void
    {
        Schema::table('oficinas', function (Blueprint $table) {
            $table->string('nombre')->nullable()->change(); // Permite revertir el cambio
        });
    }
};