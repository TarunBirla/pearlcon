<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    protected $fillable = [
        'page_name',
        'url',
        'ip_address',
        'user_agent',
        'browser',
        'platform',
        'device_type',
    ];

    public function geoCache()
    {
        return $this->belongsTo(IpGeoCache::class, 'ip_address', 'ip_address');
    }
}
