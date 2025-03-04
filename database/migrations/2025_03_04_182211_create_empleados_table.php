<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('primer_apellido')->nullable(false);
            $table->string('segundo_apellido')->nullable();
            $table->string('rol')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni')->unique()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};