<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'company',
        'company_address',
        'role',
        'start_date',
        'end_date',
        'project_summary',
    ];
}