<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'facebook',
        'instagram',
        'whatsapp',
        'email',
        'phone',
    ];
}
