@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Reservasi</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pemilik</th>
                                    <th>Jenis Hewan</th>
                                    <th>Keluhan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach($reservations as $key => $reservation)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->pet_type }}</td>
                                        <td>{{ $reservation->service->name }}</td>
                                        <td>
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
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#detail{{ $reservation->id }}">Detail</a>
                                        </td>
                                    </tr>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="detail{{ $reservation->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Reservasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <dl class="row">
                                                        <dt class="col-sm-5">Nama Pemilik</dt>
                                                        <dd class="col-sm-7">{{ $reservation->user->name }}</dd>

                                                        <dt class="col-sm-5">Nama Hewan</dt>
                                                        <dd class="col-sm-7">{{ $reservation->pet_name }}</dd>

                                                        <dt class="col-sm-5">Jenis Hewan</dt>
                                                        <dd class="col-sm-7">{{ $reservation->pet_type }}</dd>

                                                        <dt class="col-sm-5">Jenis Kelamin Hewan</dt>
                                                        <dd class="col-sm-7">{{ $reservation->pet_gender }}</dd>

                                                        <dt class="col-sm-5">Keluhan/Layanan</dt>
                                                        <dd class="col-sm-7">{{ $reservation->service->name }}</dd>

                                                        <dt class="col-sm-5">Harga</dt>
                                                        <dd class="col-sm-7">Rp {{ $reservation->service->price }}</dd>

                                                        <dt class="col-sm-5">Status</dt>
                                                        <dd class="col-sm-7">
                                                            @if ($reservation->status == 'Pending')
                                                                <label class="badge badge-warning">{{ $reservation->status }}</label>
                                                            @elseif ($reservation->status == 'Accepted')
                                                                <label class="badge badge-primary">{{ $reservation->status }}</label>
                                                            @elseif ($reservation->status == 'Rejected')
                                                                <label class="badge badge-danger">{{ $reservation->status }}</label>
                                                            @else
                                                                <label class="badge badge-success">{{ $reservation->status }}</label>
                                                            @endif
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="modal-footer">
                                                    <h4 style="margin-right: auto">Pilih Action: </h4>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                                    @if ($reservation->status == 'Pending')
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Accepted" class="btn btn-primary btn-sm">Accept</a>
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Rejected" class="btn btn-danger btn-sm">Reject</a>
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Completed" class="btn btn-success btn-sm">Complete</a>
                                                    @elseif ($reservation->status == 'Accepted')
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Rejected" class="btn btn-danger btn-sm">Reject</a>
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Completed" class="btn btn-success btn-sm">Complete</a>
                                                    @elseif ($reservation->status == 'Rejected')
                                                        <a href="reservations/updateStatus/{{ $reservation->id }}/Accepted" class="btn btn-primary btn-sm">Accept</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
