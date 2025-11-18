<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nationality',
        'birth_date',
        'death_date',
        'bio',
        'movement',
        'portrait_url',
    ];

    // Artist can have many Artpieces (Many-to-Many relationship)
    public function artpieces()
    {
        return $this->belongsToMany(Artpiece::class);
    }

}
