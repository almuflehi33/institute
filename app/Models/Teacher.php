<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\TeachersFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'qualification',
        'subjects',
        'gender',
        'notes',
    ];

    protected $hidden =['password'];
}
