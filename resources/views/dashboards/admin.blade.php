@extends('layouts.master')

{{-- @section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Reservasi Terbaru</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Jenis Hewan</th>
                                    <th>Keluhan/Layanan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $key => $reservation)
                                    <tr>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->pet_type }}</td>
                                        <td>{{ $reservation->service->name }}</td>
                                        <td class="font-weight-medium">
                                            @if ($reservation->status == 'Pending')
                                                <label class="badge badge-warning">{{ $reservation->status }}</label>
                                            @elseif ($reservation->status == 'Accepted')
                                                <label class="badge badge-primary">{{ $reservation->status }}</label>
                                            @elseif ($reservation->status == 'Rejected')
                                                <label class="badge badge-danger">{{ $reservation->status }}</label>
                                            @else
                                                <label class="badge badge-success">{{ $reservation->status }}</label>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin transparent">
            <div class="row">
                <div class="col-md-12 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Reservasi Hari Ini</p>
                            <p class="fs-30 mb-2">{{ $today }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Reservasi</p>
                            <p class="fs-30 mb-2">{{ $all }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Layanan</p>
                            <p class="fs-30 mb-2">{{ $service }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total Customer</p>
                            <p class="fs-30 mb-2">{{ $customer }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@push('script')
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
@endpush
