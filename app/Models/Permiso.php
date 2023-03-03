<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    // Relation many tom many
    public function roles()
    {
        return $this->belongsToMany('App\Models\Rol');
    }
}
