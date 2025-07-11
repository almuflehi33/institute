<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }                    
}
