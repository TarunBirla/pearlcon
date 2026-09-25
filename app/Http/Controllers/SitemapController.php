<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    /**
     * List of URI prefixes / paths to strictly exclude from the public SEO sitemap.
     */
    protected array $excludedPrefixes = [
        'pearlcon-admin-secure',
        '_ignition',
        'api',
        'sanctum',
        'chatbot-submit',
    ];

    /**
     * Specific non-indexable URIs to exclude.
     */
    protected array $excludedUris = [
        'pearlcon-admin-secure/run-migrations',
    ];

    /**
     * SEO Metadata configuration for known canonical frontend routes.
     */
    protected array $routeMeta = [
        '/' => ['priority' => '1.0', 'changefreq' => 'weekly'],
        '/our-products' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        '/brands' => ['priority' => '0.8', 'changefreq' => 'monthly'],
        '/clients' => ['priority' => '0.8', 'changefreq' => 'monthly'],
        '/contact' => ['priority' => '0.7', 'changefreq' => 'monthly'],
        '/registration-request' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    ];

    /**
     * Serve dynamic XML sitemap.
     */
    public function index()
    {
        $xmlContent = $this->generateXml();

        return response($xmlContent, 200, [
            'Content-Type' => 'text/xml; charset=UTF-8',
            'X-Robots-Tag' => 'noindex', // Sitemap itself doesn't need indexing
        ]);
    }

    /**
     * Generate standard XML sitemap content.
     */
    public function generateXml(): string
    {
        $baseUrl = rtrim(config('app.sitemap_url', 'https://pearlcon.com'), '/');
        $urls = [];

        $registeredRoutes = Route::getRoutes()->getRoutesByMethod()['GET'] ?? [];

        foreach ($registeredRoutes as $route) {
            $uri = $route->uri();

            // Skip sitemap route itself
            if ($uri === 'sitemap.xml') {
                continue;
            }

            // Exclude parameterized routes or non-public system routes
            if (str_contains($uri, '{')) {
                continue;
            }

            $shouldExclude = false;
            foreach ($this->excludedPrefixes as $prefix) {
                if ($uri === $prefix || str_starts_with($uri, $prefix . '/')) {
                    $shouldExclude = true;
                    break;
                }
            }

            if (in_array($uri, $this->excludedUris, true)) {
                $shouldExclude = true;
            }

            if ($shouldExclude) {
                continue;
            }

            $formattedPath = '/' . ltrim($uri, '/');
            $loc = ($formattedPath === '/') ? $baseUrl . '/' : $baseUrl . $formattedPath;

            $meta = $this->routeMeta[$formattedPath] ?? [
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ];

            $urls[$loc] = [
                'loc' => $loc,
                'lastmod' => date('Y-m-d'),
                'changefreq' => $meta['changefreq'],
                'priority' => (float)$meta['priority'],
                'priority_str' => $meta['priority'],
            ];
        }

        // Sort URLs: Home first (priority 1.0), then higher priorities descending
        uasort($urls, function ($a, $b) {
            if ($a['loc'] === 'https://pearlcon.com/') return -1;
            if ($b['loc'] === 'https://pearlcon.com/') return 1;
            return $b['priority'] <=> $a['priority'];
        });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
            $xml .= "    <lastmod>" . $url['lastmod'] . "</lastmod>\n";
            $xml .= "    <changefreq>" . $url['changefreq'] . "</changefreq>\n";
            $xml .= "    <priority>" . $url['priority_str'] . "</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }
}
