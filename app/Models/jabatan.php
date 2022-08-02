<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;
    public $fillable = ['nama_jabatan', 'gaji_pokok', 'uang_makan', 'uang_transportasi', 'bonus_jabatan'];
    public $timestamps = true;

    public function karyawan(){
        return $this->hasMany(karyawan::class, 'id_karyawan');
    }
}
