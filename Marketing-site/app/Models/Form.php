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
}
