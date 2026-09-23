<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpGeoCache extends Model
{
    protected $fillable = [
        'ip_address',
        'country',
        'region',
        'city',
        'status',
        'resolved_at',
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
    ];

    public function getLocationFormattedAttribute()
    {
        if ($this->status !== 'success' || empty($this->country)) {
            return '—';
        }

        $parts = array_filter([$this->city, $this->region, $this->country]);
        return implode(', ', $parts) ?: '—';
    }
}
