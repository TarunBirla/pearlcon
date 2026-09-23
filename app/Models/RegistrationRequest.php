<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationRequest extends Model
{
    protected $fillable = [
        'full_name',
        'company',
        'phone',
        'email',
        'item_part_number',
        'activities',
        'description_manufacturer_quantity',
        'ip_address',
        'status',
    ];

    protected $casts = [
        'activities' => 'array',
    ];
}