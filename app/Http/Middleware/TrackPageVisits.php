<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use App\Services\GeoIpResolver;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageVisits
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only track GET requests on non-admin routes
        if ($request->isMethod('GET') && !$request->is('pearlcon-admin-secure*') && !$request->ajax()) {
            $path = $request->path();
            $pageName = $this->resolvePageName($path);

            if ($pageName) {
                $userAgent = $request->header('User-Agent');
                $browser = $this->parseBrowser($userAgent);
                $platform = $this->parsePlatform($userAgent);
                $deviceType = $this->parseDeviceType($userAgent);
                $ip = $request->ip();

                $visit = PageVisit::create([
                    'page_name' => $pageName,
                    'url' => $request->fullUrl(),
                    'ip_address' => $ip,
                    'user_agent' => $userAgent,
                    'browser' => $browser,
                    'platform' => $platform,
                    'device_type' => $deviceType,
                ]);

                // Async resolve IP location server-side
                GeoIpResolver::resolve($ip);
            }
        }

        return $response;
    }

    private function resolvePageName(string $path): ?string
    {
        $path = trim($path, '/');

        return match ($path) {
            '' => 'Home',
            'our-products' => 'Products (Our Products)',
            'contact' => 'Contact',
            'brands' => 'Brands',
            'clients' => 'Clients',
            'registration-request' => 'Request Quote',
            default => null,
        };
    }

    private function parseBrowser(?string $ua): string
    {
        if (empty($ua)) return 'Unknown';
        if (preg_match('/Edg/i', $ua)) return 'Edge';
        if (preg_match('/Chrome/i', $ua)) return 'Chrome';
        if (preg_match('/Safari/i', $ua)) return 'Safari';
        if (preg_match('/Firefox/i', $ua)) return 'Firefox';
        if (preg_match('/MSIE|Trident/i', $ua)) return 'Internet Explorer';
        if (preg_match('/Opera|OPR/i', $ua)) return 'Opera';
        return 'Other';
    }

    private function parsePlatform(?string $ua): string
    {
        if (empty($ua)) return 'Unknown';
        if (preg_match('/Windows/i', $ua)) return 'Windows';
        if (preg_match('/iPhone|iPad|iPod/i', $ua)) return 'iOS';
        if (preg_match('/Macintosh|Mac OS X/i', $ua)) return 'macOS';
        if (preg_match('/Android/i', $ua)) return 'Android';
        if (preg_match('/Linux/i', $ua)) return 'Linux';
        return 'Other';
    }

    private function parseDeviceType(?string $ua): string
    {
        if (empty($ua)) return 'Desktop';
        if (preg_match('/Tablet|iPad/i', $ua)) return 'Tablet';
        if (preg_match('/Mobile|iPhone|Android/i', $ua)) return 'Mobile';
        return 'Desktop';
    }
}
