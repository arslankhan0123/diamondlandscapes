<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_id',
        'property_type',
        'message',
        'status',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
