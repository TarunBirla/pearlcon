@extends('admin.layouts.app')

@section('title', 'All Requests')
@section('page_title', 'Quote Submissions & Requests')

@section('content')
<div class="container-fluid p-0">

    <!-- Filters & Action Bar -->
    <div class="card-custom mb-4">
        <div class="p-3 p-md-4">
            <form method="GET" action="{{ route('admin.requests') }}" class="row g-3 align-items-end">
                <div class="col-12 col-md-3">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">Search Keyword</label>
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Name, Email, Company, Part No..." value="{{ request('search') }}">
                </div>

                <div class="col-6 col-md-2">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">Status</label>
                    <select name="status" class="form-select form-select-sm">
                        <option value="">All Statuses</option>
                        @foreach($statuses as $st)
                            <option value="{{ $st }}" {{ request('status') == $st ? 'selected' : '' }}>{{ $st }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 col-md-2">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">Industry</label>
                    <select name="industry" class="form-select form-select-sm">
                        <option value="">All Industries</option>
                        @foreach($industries as $ind)
                            <option value="{{ $ind }}" {{ request('industry') == $ind ? 'selected' : '' }}>{{ $ind }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 col-md-2">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">From Date</label>
                    <input type="date" name="date_from" class="form-control form-control-sm" value="{{ request('date_from') }}">
                </div>

                <div class="col-6 col-md-2">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">To Date</label>
                    <input type="date" name="date_to" class="form-control form-control-sm" value="{{ request('date_to') }}">
                </div>

                <div class="col-12 col-md-1 d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-primary w-100 fw-bold">Filter</button>
                    <a href="{{ route('admin.requests') }}" class="btn btn-sm btn-light border" title="Reset Filters">↻</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="card-custom">
        <div class="card-header-custom d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h5 class="m-0">Quote Requests Listing</h5>
                <small class="text-muted">Total {{ $requests->total() }} submissions found</small>
            </div>

            <a href="{{ route('admin.requests.export', request()->query()) }}" class="btn btn-sm btn-success d-inline-flex align-items-center gap-2 fw-semibold">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Export CSV
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 13.5px;">
                <thead class="table-light text-muted">
                    <tr>
                        <th scope="col" style="width: 50px;">#ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Client Name & Company</th>
                        <th scope="col">Contact Details</th>
                        <th scope="col">Part Number</th>
                        <th scope="col">Industries</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $req)
                        <tr>
                            <td class="fw-bold text-secondary">#{{ $req->id }}</td>
                            <td>
                                <div>{{ $req->created_at->format('M d, Y') }}</div>
                                <small class="text-muted fs-12">{{ $req->created_at->format('h:i A') }}</small>
                            </td>
                            <td>
                                <div class="fw-bold text-dark">{{ $req->full_name }}</div>
                                <div class="text-muted fs-12">{{ $req->company ?: '—' }}</div>
                            </td>
                            <td>
                                <div><a href="mailto:{{ $req->email }}" class="text-decoration-none text-dark">{{ $req->email }}</a></div>
                                <small class="text-muted">{{ $req->phone }}</small>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1 font-monospace">{{ $req->item_part_number }}</span>
                            </td>
                            <td>
                                @php
                                    $acts = is_array($req->activities) ? $req->activities : (json_decode($req->activities, true) ?: [$req->activities]);
                                @endphp
                                @foreach((array)$acts as $act)
                                    @if(!empty($act))
                                        <span class="badge bg-secondary-subtle text-secondary border fs-11 me-1 mb-1">{{ $act }}</span>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <form action="{{ route('admin.requests.status', $req->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm border-0 fw-bold rounded-pill px-3 py-1 fs-12
                                        @if($req->status === 'New') badge-status-new
                                        @elseif($req->status === 'In Progress') badge-status-progress
                                        @elseif($req->status === 'Responded') badge-status-responded
                                        @else badge-status-closed @endif">
                                        @foreach($statuses as $st)
                                            <option value="{{ $st }}" {{ $req->status === $st ? 'selected' : '' }}>{{ $st }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-primary fw-semibold px-2 py-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#requestModal{{ $req->id }}">
                                    View
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Detail View -->
                        <div class="modal fade" id="requestModal{{ $req->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 shadow-lg">
                                    <div class="modal-header bg-dark text-white">
                                        <h5 class="modal-title heading-font">Request Details #{{ $req->id }}</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Full Name</small>
                                                <div class="fw-bold fs-15 text-dark">{{ $req->full_name }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Company Name</small>
                                                <div class="fw-bold fs-15 text-dark">{{ $req->company ?: 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Phone Number</small>
                                                <div class="fw-semibold text-dark">{{ $req->phone }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Email Address</small>
                                                <div class="fw-semibold text-dark">{{ $req->email }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Item / Part Number</small>
                                                <div class="fw-bold font-monospace text-primary fs-15">{{ $req->item_part_number }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Submission Date & IP</small>
                                                <div class="fw-semibold text-dark">{{ $req->created_at->format('M d, Y h:i A') }} <span class="badge bg-light text-secondary border font-monospace ms-1">{{ $req->ip_address ?: 'Unknown' }}</span></div>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Target Industries</small>
                                                <div class="mt-1">
                                                    @foreach((array)$acts as $act)
                                                        @if(!empty($act))
                                                            <span class="badge bg-primary-subtle text-primary border me-1 mb-1 fs-12 px-2 py-1">{{ $act }}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-muted d-block uppercase fw-bold fs-11 mb-1">Description / Manufacturer / Quantity Details</small>
                                                <div class="p-3 bg-light rounded border text-dark white-space-pre-line" style="white-space: pre-wrap; font-size: 14px;">
                                                    {{ $req->description_manufacturer_quantity }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-5 text-muted">
                                <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="mb-2 text-secondary opacity-50"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                <p class="m-0 fw-semibold">No quote requests found matching criteria.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($requests->hasPages())
            <div class="p-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div class="text-muted fs-13">
                    Showing <strong>{{ $requests->firstItem() }}</strong> to <strong>{{ $requests->lastItem() }}</strong> of <strong>{{ $requests->total() }}</strong> requests
                </div>
                <div>
                    {{ $requests->links() }}
                </div>
            </div>
        @endif
    </div>

</div>
@endsection
