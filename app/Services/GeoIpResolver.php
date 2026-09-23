<?php

namespace App\Services;

use App\Models\IpGeoCache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeoIpResolver
{
    public static function resolve(?string $ip): IpGeoCache
    {
        if (empty($ip) || in_array($ip, ['127.0.0.1', '::1', 'localhost'])) {
            return IpGeoCache::firstOrCreate(
                ['ip_address' => $ip ?? '127.0.0.1'],
                [
                    'country' => null,
                    'region' => null,
                    'city' => null,
                    'status' => 'fail',
                    'resolved_at' => now(),
                ]
            );
        }

        // Check cache first
        $cached = IpGeoCache::where('ip_address', $ip)->first();
        if ($cached) {
            return $cached;
        }

        try {
            $url = "http://ip-api.com/json/{$ip}?fields=status,message,country,regionName,city,query";
            $response = Http::timeout(3)->get($url);

            if ($response->successful() && $response->json('status') === 'success') {
                $data = $response->json();
                return IpGeoCache::create([
                    'ip_address' => $ip,
                    'country' => $data['country'] ?? null,
                    'region' => $data['regionName'] ?? null,
                    'city' => $data['city'] ?? null,
                    'status' => 'success',
                    'resolved_at' => now(),
                ]);
            }
        } catch (\Throwable $e) {
            Log::warning("GeoIP resolution failed for IP {$ip}: " . $e->getMessage());
        }

        return IpGeoCache::create([
            'ip_address' => $ip,
            'country' => null,
            'region' => null,
            'city' => null,
            'status' => 'fail',
            'resolved_at' => now(),
        ]);
    }
}
