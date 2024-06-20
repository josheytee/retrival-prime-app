<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'message'
    ];

    public function serivce(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
