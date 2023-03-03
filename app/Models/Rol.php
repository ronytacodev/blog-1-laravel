<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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

    // One To One Polymorphic Relationship
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
