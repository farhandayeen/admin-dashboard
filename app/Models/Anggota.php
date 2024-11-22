<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    // Properti $fillable digunakan untuk menentukan kolom mana saja yang dapat diisi secara massal 
    // Ini berguna untuk melindungi aplikasi dari mass assignment vulnerability.
    protected $fillable = [
        'id',
        'name',
        'position',
        'office',
        'created_at',
        'updated_at'
    ];
}
