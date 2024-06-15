<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'organization_name',
        'organization_website',
        'organisation_email',
        'username',
        'velification_code',
        'country',
        'state',
        'zip',
      
    ];
}
