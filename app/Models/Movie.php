<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Defining the fillable fields
    protected $fillable = ['title', 'original_title', 'nationality', 'date', 'vote'];
}
