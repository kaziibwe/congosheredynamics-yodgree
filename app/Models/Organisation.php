<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'organisation_email',
        'organisation_website',
        'organisation_name',
        'product',
        // 'velification_code',
        'country',
        'state',
        'zip',
        'organisation_phone',
        'organisation_address',
        'nature_of_business',
        'organisation_logo',
        'image',
        'number_of_users'


    ];

    public function users(){
        return $this->hasMany(User::class);
        // return $this->hasMany(Member::class);

    }
}
