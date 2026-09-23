<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IpGeoCache;
use App\Models\PageVisit;
use App\Models\RegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAnalyticsController extends Controller
{
    public function index(Request $request)
    {
        // 1. Top Summary Cards Metrics
        $totalVisits = PageVisit::count();
        $todaysVisits = PageVisit::whereDate('created_at', now()->today())->count();
        $totalRequests = RegistrationRequest::count();
        $uniqueCountries = IpGeoCache::where('status', 'success')
            ->whereNotNull('country')
            ->where('country', '!=', '')
            ->distinct('country')
            ->count('country');
        $uniqueVisitors = PageVisit::distinct('ip_address')->count('ip_address');

        // 2. Last 30 Days Visits Chart Data
        $startDate = now()->subDays(29)->startOfDay();
        $rawDailyVisits = PageVisit::where('created_at', '>=', $startDate)
            ->select(DB::raw('DATE(created_at) as visit_date'), DB::raw('COUNT(*) as count'))
            ->groupBy('visit_date')
            ->pluck('count', 'visit_date')
            ->toArray();

        $dailyLabels = [];
        $dailyData = [];
        for ($i = 29; $i >= 0; $i--) {
            $dateStr = now()->subDays($i)->format('Y-m-d');
            $displayDate = now()->subDays($i)->format('M d');
            $dailyLabels[] = $displayDate;
            $dailyData[] = $rawDailyVisits[$dateStr] ?? 0;
        }

        // 3. Browser Usage Chart Data
        $browserBreakdown = PageVisit::select('browser', DB::raw('COUNT(*) as total'))
            ->groupBy('browser')
            ->orderByDesc('total')
            ->get();

        // 4. Platform Usage Chart Data
        $platformBreakdown = PageVisit::select('platform', DB::raw('COUNT(*) as total'))
            ->groupBy('platform')
            ->orderByDesc('total')
            ->get();

        // 5. Top Visited Pages Ranked List
        $topPages = PageVisit::select('page_name', DB::raw('COUNT(*) as total'))
            ->groupBy('page_name')
            ->orderByDesc('total')
            ->get();

        // 6. Page Visit History Table (Filtered & Paginated)
        $historyQuery = PageVisit::with('geoCache');

        if ($search = trim($request->input('search', ''))) {
            $historyQuery->where(function ($q) use ($search) {
                $q->where('url', 'like', "%{$search}%")
                  ->orWhere('ip_address', 'like', "%{$search}%")
                  ->orWhere('page_name', 'like', "%{$search}%");
            });
        }

        if ($pageFilter = $request->input('page_name')) {
            $historyQuery->where('page_name', $pageFilter);
        }

        if ($dateFrom = $request->input('date_from')) {
            $historyQuery->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo = $request->input('date_to')) {
            $historyQuery->whereDate('created_at', '<=', $dateTo);
        }

        $visitHistory = $historyQuery->orderByDesc('id')->paginate(15)->withQueryString();

        $allPages = [
            'Home', 'Products (Our Products)', 'Contact', 'Brands', 'Clients', 'Request Quote'
        ];

        return view('admin.analytics.index', compact(
            'totalVisits',
            'todaysVisits',
            'totalRequests',
            'uniqueCountries',
            'uniqueVisitors',
            'dailyLabels',
            'dailyData',
            'browserBreakdown',
            'platformBreakdown',
            'topPages',
            'visitHistory',
            'allPages'
        ));
    }
}
