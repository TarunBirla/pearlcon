<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') — Pearlcon Control Panel</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/img/logo.jpeg') }}">
    <!-- Fonts & Tailwind / Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --sidebar-width: 260px;
            --primary-navy: #0a1626;
            --primary-amber: #e98423;
            --hover-navy: #101f35;
            --bg-light: #f4f6f8;
            --card-border: #e2e8f0;
        }

        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: var(--bg-light);
            color: #1e293b;
            margin: 0;
            padding: 0;
        }

        .heading-font {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* Sidebar Styles */
        .admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background: var(--primary-navy);
            color: #ffffff;
            z-index: 1040;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .sidebar-brand {
            padding: 20px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-brand img {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            object-fit: cover;
        }

        .sidebar-brand strong {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 16px;
            letter-spacing: 0.02em;
            color: #ffffff;
            display: block;
        }

        .sidebar-brand span {
            font-size: 11px;
            color: var(--primary-amber);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .sidebar-nav {
            padding: 20px 14px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar-nav .nav-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #64748b;
            padding: 8px 12px;
            font-weight: 600;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #94a3b8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        .sidebar-nav a:hover, .sidebar-nav a.active {
            color: #ffffff;
            background: var(--hover-navy);
        }

        .sidebar-nav a.active {
            background: rgba(233, 132, 35, 0.15);
            color: var(--primary-amber);
            font-weight: 600;
            border-left: 3.5px solid var(--primary-amber);
        }

        .sidebar-nav a svg {
            width: 18px;
            height: 18px;
            stroke-width: 2;
        }

        /* Main Wrapper */
        .admin-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .admin-header {
            background: #ffffff;
            border-bottom: 1px solid var(--card-border);
            height: 64px;
            padding: 0 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .admin-header h1 {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            color: var(--primary-navy);
        }

        .user-dropdown {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .avatar-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary-navy);
            color: var(--primary-amber);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        .admin-content {
            padding: 28px;
            flex: 1;
        }

        .card-custom {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.03);
            margin-bottom: 24px;
        }

        .card-header-custom {
            padding: 18px 24px;
            border-bottom: 1px solid var(--card-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header-custom h5 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-navy);
        }

        .badge-status-new { background: #e0f2fe; color: #0369a1; }
        .badge-status-progress { background: #fef3c7; color: #b45309; }
        .badge-status-responded { background: #dcfce7; color: #15803d; }
        .badge-status-closed { background: #f1f5f9; color: #475569; }

        @media (max-width: 991px) {
            .admin-sidebar { transform: translateX(-100%); }
            .admin-sidebar.show { transform: translateX(0); }
            .admin-wrapper { margin-left: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Pearlcon Logo" onerror="this.src='https://via.placeholder.com/40/0a1626/ffffff?text=P';">
            <div>
                <strong>PEARLCON</strong>
                <span>Admin Panel</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-label">Core Management</div>
            <a href="{{ route('admin.requests') }}" class="{{ request()->routeIs('admin.requests') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                All Requests
            </a>

            <a href="{{ route('admin.analytics') }}" class="{{ request()->routeIs('admin.analytics') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                Visit Analytics
            </a>
        </nav>
    </aside>

    <!-- Main Section -->
    <div class="admin-wrapper">
        <header class="admin-header">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-light d-lg-none" onclick="document.getElementById('adminSidebar').classList.toggle('show')">
                    ☰
                </button>
                <h1 class="heading-font">@yield('page_title', 'Dashboard')</h1>
            </div>

            <div class="user-dropdown">
                <div class="avatar-circle">
                    {{ strtoupper(substr(Auth::guard('admin')->user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="d-none d-sm-block text-end">
                    <div class="fw-semibold text-dark fs-14">{{ Auth::guard('admin')->user()->name ?? 'Administrator' }}</div>
                    <div class="text-muted fs-12">{{ Auth::guard('admin')->user()->email ?? 'admin@pearlcon.com' }}</div>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST" class="ms-2">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger d-inline-flex align-items-center gap-1" title="Logout">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <main class="admin-content">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
