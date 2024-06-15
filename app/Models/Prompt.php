<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;
    
      public function user(){
        return $this->belongsTo(User::class, 'user_id');

    }
    //     public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    
    
      // relation for a prompt to the response
      public function responses(){
        return $this->hasMany(Response::class);
        // return $this->hasMany(Member::class);

    }
    
    
}
