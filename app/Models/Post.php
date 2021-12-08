<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [     //mengirim data ke database
        'user_id',
        'body',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class); //menyambungkan user yang membuat catatn
    }

}
