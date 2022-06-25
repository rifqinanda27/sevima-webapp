<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'course',
        'desc',
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'id');
    }
}
