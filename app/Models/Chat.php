<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat',
        'user_id',
        'chat_id',
        'time',
       

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');

    }




      public function messages(){
        return $this->hasMany(Message::class);

    }
}
