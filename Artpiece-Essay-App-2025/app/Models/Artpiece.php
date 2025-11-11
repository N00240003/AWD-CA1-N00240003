<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Artpiece extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img_url',
        'type',
        'year',
        'created_at',
    ];

    // Define relationship to essays
    // An artpiece can have many essays
    public function essays()
    {
        return $this->hasMany(Essay::class);
    }

    // Define relationship to artists
    // An artpiece can have many artists (Many-to-Many relationship)
    public function artists(){
        return $this->belongsToMany(Artist::class);
    }
}
