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
}
