<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('temans', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email'); // Tambah kolom phone setelah email
        });
    }

    public function down(): void
    {
        Schema::table('temans', function (Blueprint $table) {
            $table->dropColumn('phone'); // Hapus kolom jika rollback
        });
    }
};
