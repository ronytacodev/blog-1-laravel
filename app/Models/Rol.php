<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Relation many tom many
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function permisos()
    {
        return $this->belongsToMany('App\Models\Permiso');
    }
}
