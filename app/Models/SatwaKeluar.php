<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatwaKeluar extends Model
{
    use HasFactory;
    protected $table = 'satwa_masuk';
    protected $fillable = ['nama_satwa', 'kategori', 'tgl_masuk', 'foto', 'keterangan'];
}
