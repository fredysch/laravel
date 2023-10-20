<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $casts = [
        'image' => 'array',
    ];

    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
    ];

}
