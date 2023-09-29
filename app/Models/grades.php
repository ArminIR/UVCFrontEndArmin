<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $fillable = ['course_name', 'test_name', 'ec', 'best_grade'];
}
