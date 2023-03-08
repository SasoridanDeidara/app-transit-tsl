<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatwaMasuk extends Model
{
    use HasFactory;
    protected $table = 'satwa_keluar';
    protected $fillable = ['nama_satwa', 'kategori', 'tgl_keluar', 'foto', 'keterangan'];
}
