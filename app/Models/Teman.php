<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teman extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'temans';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = ['name', 'email', 'phone', 'keluarga']; 


    // Jika tabel tidak memiliki timestamp (created_at, updated_at), gunakan ini:
    // public $timestamps = false;
}


