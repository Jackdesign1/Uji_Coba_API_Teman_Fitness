<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kelas');
        $table->text('deskripsi')->nullable();
        $table->string('foto')->nullable();      // foto kelas
        $table->dateTime('jadwal_kelas');
        // foreign key ke mentors
        $table->foreignId('mentor_id')->nullable()->constrained('mentors')->onDelete('set null');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};


