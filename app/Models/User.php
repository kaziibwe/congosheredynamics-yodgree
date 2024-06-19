<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'username',
        'velification_code',
        'password',
        'phone1',
        'gender',
        'age',
        'login_status',
        'twogere_customer_id',
        'yodegree_customer_id',
        'org_customer_id',
        'institution',
        'level_of_education',
        'semester',
        'year',
        'organisation_id',

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
        'password' => 'hashed',
    ];

    // time staple false
    public $timestamps = false;


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }


    // relation for a member and  prompt
    //   public function prompts(){
    //     return $this->hasMany(Prompt::class);

    // }

        public function chats() // Ensure the method name is 'prompts' and not 'promps'
    {
        return $this->hasMany(Chat::class);
    }
}
