<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $appends = [
    //     'profile_photo_url',
    // ];

    // Relation one to one
    public function profile()
    {
        // $profile = Profile::where('user_id', $this->id)->first();

        // return $profile;

        // return $this->hasOne(Profile::class);

        return $this->hasOne('App\Models\Profile');
    }

    // Relation one to many
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    // Relation many to many
    public function roles()
    {
        return $this->belongsToMany('App\Models\Rol');
    }

    // One To One Polymorphic Relationship
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    protected function name(): Attribute
    {
        // laravel 9
        // return new Attribute(
        //     get: function ($value) {
        //         return ucwords($value);
        //     },

        //     set: function ($value) {
        //         return strtolower($value);
        //     }
        // );

        // usando lo nuevo de PHP 8
        return new Attribute(
            get: fn ($value) => ucwords($value),

            set: fn ($value) => strtolower($value)
        );
    }

    // como se escribía los accesores en laravel 7 digamos 
    // public function getNameAttribute($value)
    // {
    //     return ucwords($value);
    // }

    // como se escribían los mutadores en laravel 7 digamos 
    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = strtolower($value);
    // }
}
