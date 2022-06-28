<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens,
        HasFactory,
        Notifiable;




    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registerUser($request): self
    {
        $this->name = $request->username;
        $this->phone = $request->phone;
        $this->location = $request->location;
        $code = rand(5000, 999999);
        $this->code = $code;
        $this->save();
        // $data = ['code' => $this->code, 'username' => $this->name, 'phone' => $this->phone];
        return $this;
    }


    /**
     * Get all of the charts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function charts()
    {
        return $this->hasMany(Chart::class, 'user_id', 'id')->get();
    }
}
