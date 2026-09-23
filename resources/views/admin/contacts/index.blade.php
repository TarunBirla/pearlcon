@extends('admin.layouts.app')

@section('title', 'Contact Messages')
@section('page_title', 'Contact Form Messages')

@section('content')
<div class="container-fluid p-0">

    <!-- Filters & Action Bar -->
    <div class="card-custom mb-4">
        <div class="p-3 p-md-4">
            <form method="GET" action="{{ route('admin.contacts') }}" class="row g-3 align-items-end">
                <div class="col-12 col-md-4">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">Search Keyword</label>
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Name, Email, Phone, Message..." value="{{ request('search') }}">
                </div>

                <div class="col-6 col-md-3">
                    <label class="form-label text-muted fs-12 fw-bold uppercase mb-1">Status</label>
                    <select name="status" class="form-select form-select-sm">
                        <option value="">All Statuses</option>
                        @foreach($statuses as $st)
                            <option value="{{ $st }}" {{ request('status') == $st ? 'selected' : '' }}>{{ $st }}</option>
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
                    <a href="{{ route('admin.contacts') }}" class="btn btn-sm btn-light border" title="Reset Filters">↻</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="card-custom">
        <div class="card-header-custom d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h5 class="m-0">Contact Messages Listing</h5>
                <small class="text-muted">Total {{ $messages->total() }} entries found</small>
            </div>

            <a href="{{ route('admin.contacts.export', request()->query()) }}" class="btn btn-sm btn-success d-inline-flex align-items-center gap-2 fw-semibold">
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
                        <th scope="col">Full Name</th>
                        <th scope="col">Email & Phone</th>
                        <th scope="col">Message Preview</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                        <tr>
                            <td class="fw-bold text-secondary">#{{ $msg->id }}</td>
                            <td>
                                <div>{{ $msg->created_at ? $msg->created_at->format('M d, Y') : '—' }}</div>
                                <small class="text-muted fs-12">{{ $msg->created_at ? $msg->created_at->format('h:i A') : '' }}</small>
                            </td>
                            <td>
                                <div class="fw-bold text-dark">{{ $msg->first_name }} {{ $msg->last_name }}</div>
                            </td>
                            <td>
                                <div><a href="mailto:{{ $msg->email }}" class="text-decoration-none text-dark">{{ $msg->email }}</a></div>
                                <small class="text-muted">{{ $msg->phone }}</small>
                            </td>
                            <td>
                                <div class="text-truncate text-muted" style="max-width: 280px;" title="{{ $msg->message }}">
                                    {{ $msg->message }}
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('admin.contacts.status', $msg->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm border-0 fw-bold rounded-pill px-3 py-1 fs-12
                                        @if($msg->status === 'New') badge-status-new
                                        @elseif($msg->status === 'In Progress') badge-status-progress
                                        @elseif($msg->status === 'Replied') badge-status-responded
                                        @else badge-status-closed @endif">
                                        @foreach($statuses as $st)
                                            <option value="{{ $st }}" {{ $msg->status === $st ? 'selected' : '' }}>{{ $st }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-primary fw-semibold px-2 py-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#contactModal{{ $msg->id }}">
                                    View Message
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Detail View -->
                        <div class="modal fade" id="contactModal{{ $msg->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 shadow-lg">
                                    <div class="modal-header bg-dark text-white">
                                        <h5 class="modal-title heading-font">Contact Message #{{ $msg->id }}</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Sender Name</small>
                                                <div class="fw-bold fs-15 text-dark">{{ $msg->first_name }} {{ $msg->last_name }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Date & Time</small>
                                                <div class="fw-semibold text-dark">{{ $msg->created_at ? $msg->created_at->format('M d, Y h:i A') : 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Email Address</small>
                                                <div class="fw-semibold text-dark"><a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a></div>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted d-block uppercase fw-bold fs-11">Phone Number</small>
                                                <div class="fw-semibold text-dark"><a href="tel:{{ $msg->phone }}">{{ $msg->phone }}</a></div>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-muted d-block uppercase fw-bold fs-11 mb-1">Message Content</small>
                                                <div class="p-3 bg-light rounded border text-dark" style="white-space: pre-wrap; font-size: 14px; line-height: 1.6;">
                                                    {{ $msg->message }}
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
                            <td colspan="7" class="text-center py-5 text-muted">
                                <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="mb-2 text-secondary opacity-50"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <p class="m-0 fw-semibold">No contact messages found matching criteria.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($messages->hasPages())
            <div class="p-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div class="text-muted fs-13">
                    Showing <strong>{{ $messages->firstItem() }}</strong> to <strong>{{ $messages->lastItem() }}</strong> of <strong>{{ $messages->total() }}</strong> messages
                </div>
                <div>
                    {{ $messages->links() }}
                </div>
            </div>
        @endif
    </div>

</div>
@endsection
