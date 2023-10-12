<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $table = 'pemain';
    protected $primarykey = 'id_pemain';
    protected $fillable = [
        'nama_pemain',
        'no_punggung',
        'posisi'
    ];
    
}