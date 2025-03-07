<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // 一括割り当てを許可するカラムを指定
    protected $fillable = [
        'title', 'image_url', 'published_year', 'description', 'is_showing'
    ];
}
