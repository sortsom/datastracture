<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
//        'fnamek',
        'lnamek',
        'funamek',
        'nameE',
        'dname',
        'email',
        'password',
        'phone',
        'image',
        'db',
        'gender',
        'role',
    ];

}
