<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post -> posts
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'prefecture',
        'company',
        'jyob',
        'employmentstatus',
    ];
}

