<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    public $fillable = ['id_admin', 'nik', 'nama_karyawan', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat', 'no_telepon', 'tanggal_masuk', 'lama_kerja' , 'id_jabatan', 'id_status'];
    public $timestamps = true;

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class, 'id_jabatan');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function status()
    {
        return $this->belongsTo(status::class, 'id_status');
    }
}
