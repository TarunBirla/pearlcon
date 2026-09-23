@extends('admin.layouts.app')

@section('title', 'Visit Analytics')
@section('page_title', 'Visitor & Website Analytics')

@section('content')
<div class="container-fluid p-0">

    <!-- Top 5 Metric Cards -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-lg">
            <div class="card-custom p-3 text-center h-100 mb-0">
                <div class="text-muted fs-12 uppercase fw-bold mb-1">Total Page Visits</div>
                <div class="fs-2 fw-bold text-dark heading-font">{{ number_format($totalVisits) }}</div>
                <small class="text-success fw-semibold">All Time</small>
            </div>
        </div>
        <div class="col-6 col-lg">
            <div class="card-custom p-3 text-center h-100 mb-0">
                <div class="text-muted fs-12 uppercase fw-bold mb-1">Today's Visits</div>
                <div class="fs-2 fw-bold text-primary heading-font">{{ number_format($todaysVisits) }}</div>
                <small class="text-muted">Since 12:00 AM</small>
            </div>
        </div>
        <div class="col-6 col-lg">
            <div class="card-custom p-3 text-center h-100 mb-0">
                <div class="text-muted fs-12 uppercase fw-bold mb-1">Quote Requests</div>
                <div class="fs-2 fw-bold text-warning heading-font">{{ number_format($totalRequests) }}</div>
                <small class="text-muted">Form Submissions</small>
            </div>
        </div>
        <div class="col-6 col-lg">
            <div class="card-custom p-3 text-center h-100 mb-0">
                <div class="text-muted fs-12 uppercase fw-bold mb-1">Unique Visitors</div>
                <div class="fs-2 fw-bold text-info heading-font">{{ number_format($uniqueVisitors) }}</div>
                <small class="text-muted">Distinct IP Addresses</small>
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="card-custom p-3 text-center h-100 mb-0">
                <div class="text-muted fs-12 uppercase fw-bold mb-1">Countries Reached</div>
                <div class="fs-2 fw-bold text-success heading-font">{{ number_format($uniqueCountries) }}</div>
                <small class="text-muted">Global Geo Distribution</small>
            </div>
        </div>
    </div>

    <!-- Charts Grid Row 1 -->
    <div class="row g-4 mb-4">
        <!-- 30-Day Visits Trend Chart -->
        <div class="col-12 col-lg-8">
            <div class="card-custom h-100 mb-0">
                <div class="card-header-custom">
                    <h5 class="m-0">Daily Visits Trend (Last 30 Days)</h5>
                </div>
                <div class="p-3">
                    <canvas id="dailyVisitsChart" height="240"></canvas>
                </div>
            </div>
        </div>

        <!-- Top Pages Breakdown -->
        <div class="col-12 col-lg-4">
            <div class="card-custom h-100 mb-0">
                <div class="card-header-custom">
                    <h5 class="m-0">Top Visited Pages</h5>
                </div>
                <div class="p-3">
                    @forelse($topPages as $page)
                        @php
                            $percentage = $totalVisits > 0 ? round(($page->total / $totalVisits) * 100, 1) : 0;
                        @endphp
                        <div class="mb-3">
                            <div class="d-flex justify-content-between fs-13 mb-1">
                                <span class="fw-semibold text-dark">{{ $page->page_name }}</span>
                                <span class="text-muted fw-bold">{{ number_format($page->total) }} ({{ $percentage }}%)</span>
                            </div>
                            <div class="progress" style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $percentage }}%"></div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-4 text-muted fs-13">No page visit records yet.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Grid Row 2 -->
    <div class="row g-4 mb-4">
        <!-- Browser Breakdown -->
        <div class="col-12 col-md-6">
            <div class="card-custom mb-0">
                <div class="card-header-custom">
                    <h5 class="m-0">Browser Usage</h5>
                </div>
                <div class="p-3 d-flex justify-content-center">
                    <div style="max-width: 320px; width: 100%;">
                        <canvas id="browserChart" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Platform Breakdown -->
        <div class="col-12 col-md-6">
            <div class="card-custom mb-0">
                <div class="card-header-custom">
                    <h5 class="m-0">Operating Systems & Platforms</h5>
                </div>
                <div class="p-3 d-flex justify-content-center">
                    <div style="max-width: 320px; width: 100%;">
                        <canvas id="platformChart" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Visit History Table & Filter -->
    <div class="card-custom">
        <div class="card-header-custom d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h5 class="m-0">Page Visit History</h5>
                <small class="text-muted">Live incoming traffic log</small>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="p-3 border-bottom bg-light-subtle">
            <form method="GET" action="{{ route('admin.analytics') }}" class="row g-2 align-items-end">
                <div class="col-12 col-md-4">
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search IP address or URL..." value="{{ request('search') }}">
                </div>

                <div class="col-6 col-md-3">
                    <select name="page_name" class="form-select form-select-sm">
                        <option value="">All Pages</option>
                        @foreach($allPages as $pg)
                            <option value="{{ $pg }}" {{ request('page_name') == $pg ? 'selected' : '' }}>{{ $pg }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 col-md-2">
                    <input type="date" name="date_from" class="form-control form-control-sm" value="{{ request('date_from') }}">
                </div>

                <div class="col-6 col-md-2">
                    <input type="date" name="date_to" class="form-control form-control-sm" value="{{ request('date_to') }}">
                </div>

                <div class="col-6 col-md-1 d-flex gap-1">
                    <button type="submit" class="btn btn-sm btn-primary w-100">Filter</button>
                    <a href="{{ route('admin.analytics') }}" class="btn btn-sm btn-light border">↻</a>
                </div>
            </form>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 13px;">
                <thead class="table-light text-muted">
                    <tr>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Page Visited</th>
                        <th scope="col">IP Address</th>
                        <th scope="col">Location (Country / City)</th>
                        <th scope="col">Browser</th>
                        <th scope="col">Platform</th>
                        <th scope="col" class="text-end">Device</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($visitHistory as $visit)
                        <tr>
                            <td>
                                <div class="fw-semibold text-dark">{{ $visit->created_at->format('M d, Y') }}</div>
                                <small class="text-muted">{{ $visit->created_at->format('h:i:s A') }}</small>
                            </td>
                            <td>
                                <span class="fw-bold text-dark">{{ $visit->page_name }}</span>
                                <div class="text-muted fs-11 text-truncate" style="max-width: 220px;" title="{{ $visit->url }}">{{ $visit->url }}</div>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border font-monospace">{{ $visit->ip_address }}</span>
                            </td>
                            <td>
                                @if($visit->geoCache && $visit->geoCache->status === 'success')
                                    <div class="fw-semibold text-dark">{{ $visit->geoCache->country }}</div>
                                    <small class="text-muted">{{ $visit->geoCache->city ?: $visit->geoCache->region }}</small>
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary border">{{ $visit->browser }}</span>
                            </td>
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary border">{{ $visit->platform }}</span>
                            </td>
                            <td class="text-end text-muted">
                                {{ $visit->device_type }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">No visit logs found matching criteria.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($visitHistory->hasPages())
            <div class="p-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div class="text-muted fs-13">
                    Showing <strong>{{ $visitHistory->firstItem() }}</strong> to <strong>{{ $visitHistory->lastItem() }}</strong> of <strong>{{ $visitHistory->total() }}</strong> visit logs
                </div>
                <div>
                    {{ $visitHistory->links() }}
                </div>
            </div>
        @endif
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // 1. Daily Visits Chart
        const dailyCtx = document.getElementById('dailyVisitsChart').getContext('2d');
        new Chart(dailyCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($dailyLabels) !!},
                datasets: [{
                    label: 'Visits',
                    data: {!! json_encode($dailyData) !!},
                    borderColor: '#e98423',
                    backgroundColor: 'rgba(233, 132, 35, 0.1)',
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.35,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, ticks: { precision: 0 } },
                    x: { grid: { display: false } }
                }
            }
        });

        // 2. Browser Chart
        const browserData = {!! json_encode($browserBreakdown) !!};
        const browserLabels = browserData.map(b => b.browser);
        const browserTotals = browserData.map(b => b.total);

        const browserCtx = document.getElementById('browserChart').getContext('2d');
        new Chart(browserCtx, {
            type: 'doughnut',
            data: {
                labels: browserLabels,
                datasets: [{
                    data: browserTotals,
                    backgroundColor: ['#0a1626', '#e98423', '#3b82f6', '#10b981', '#8b5cf6', '#64748b']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        // 3. Platform Chart
        const platformData = {!! json_encode($platformBreakdown) !!};
        const platformLabels = platformData.map(p => p.platform);
        const platformTotals = platformData.map(p => p.total);

        const platformCtx = document.getElementById('platformChart').getContext('2d');
        new Chart(platformCtx, {
            type: 'doughnut',
            data: {
                labels: platformLabels,
                datasets: [{
                    data: platformTotals,
                    backgroundColor: ['#3b82f6', '#10b981', '#e98423', '#8b5cf6', '#f59e0b', '#64748b']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom' } }
            }
        });
    });
</script>
@endpush
