<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relation many tom many
    public function users()
    {
        // return $this->belongsToMany('App\Models\User');
    }
}
