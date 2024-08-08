<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bio',
        'experience',
        'experience_summary',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
