<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'tags',
        'status',
        'start_at',
        'end_at'
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
