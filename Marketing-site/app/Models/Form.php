<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'contact_forms';

    protected $fillable = [
        'name', 'telephone', 'email', 'comment', 'reason_id'
    ];

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $userEmail = "vanstefek@gmail.com";
    //         Mail::to($userEmail)->send(new SendMail($item));
    //     });
    // }
}
