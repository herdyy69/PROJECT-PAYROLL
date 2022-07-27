<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    public $fillable = ['id_karyawan', 'hari_izin', 'hari_sakit', 'hari_alfa', 'hari_kerja', 'asuransi', 'total_gaji', 'tanggal_penggajian'];
    public $timestamps = true;
}
