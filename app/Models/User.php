<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'level',
        'foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function User()
    {
        return $this->hasMany(admin::class, 'id_admin');
    }

    public function image()
    {
        if ($this->foto && file_exists(public_path('images/akun/' . $this->foto))) {
            return asset('images/akun/' . $this->foto);
        } else {
            return asset('images/no_images.jpg');
        }
    }
    public function deleteimage()
    {
        if ($this->foto && file_exists(public_path('images/akun/' . $this->foto))) {
            return unlink(public_path('images/akun/' . $this->foto));
        }
    }
}
