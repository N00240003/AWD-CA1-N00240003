<?php

namespace App\Models;

// 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'artpiece_id',
        'user_id',
        'essay_title',
        'essay_text',
        'tags',
    ];

    // Define relationship to Artpiece
    // An essay belongs to one artpiece
    public function artpiece()
    {
        return $this->belongsTo(Artpiece::class);
    }
    
    // Define relationship to User
    // An essay can belong to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship to User (Author)
    // An essay belongs to one author (user)
    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
