<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    public $fillable = ['jenis_status', 'bonus_status'];
    public $timestamps = true;

    public function status(){
        return $this->hasMany(status::class, 'id_status');
    }
}
