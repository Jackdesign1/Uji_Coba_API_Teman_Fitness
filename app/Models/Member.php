<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members'; // Nama tabel di database

    protected $fillable = [
        'name',
        'password',
        'email',
        'phone',
        'start_date',
        'end_date',
        'status'
    ];

    // Mutator status agar otomatis berubah
    public function getStatusAttribute($value)
    {
        return Carbon::now()->greaterThan($this->end_date) ? 'inactive' : $value;
    }
}
