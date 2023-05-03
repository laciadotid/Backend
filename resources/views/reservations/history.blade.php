@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Riwayat Reservasi</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Hewan</th>
                                    <th>Keluhan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($histories as $key => $history)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $history->pet_name }}</td>
                                        <td>{{ $history->service->name }}</td>
                                        @if ($history->status == 'Pending')
                                            <td>
                                                <label class="badge badge-warning">{{ $history->status }}</label>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#detail{{ $history->id }}">Detail</a> | 
                                                <a href="{{ route('reservations.edit', $history->id) }}">Edit</a> | 
                                                <form action="{{ route('reservations.destroy', $history->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" onclick="this.closest('form').submit(); return false;">Cancel</a>
                                                </form>
                                            </td>
                                        @elseif ($history->status == 'Accepted')
                                            <td>
                                                <label class="badge badge-primary">{{ $history->status }}</label>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#detail{{ $history->id }}">Detail</a>
                                            </td>
                                        @elseif ($history->status == 'Rejected')
                                            <td>
                                                <label class="badge badge-danger">{{ $history->status }}</label>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#detail{{ $history->id }}">Detail</a>
                                            </td>
                                            @else
                                            <td>
                                                <label class="badge badge-success">{{ $history->status }}</label>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#detail{{ $history->id }}">Detail</a>
                                            </td>
                                        @endif
                                    </tr>
                                    <div class="modal fade" id="detail{{ $history->id }}" tabindex="-1" role="dialog"
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
                                                        <dd class="col-sm-7">{{ Auth::user()->name }}</dd>

                                                        <dt class="col-sm-5">Nama Hewan</dt>
                                                        <dd class="col-sm-7">{{ $history->pet_name }}</dd>

                                                        <dt class="col-sm-5">Jenis Hewan</dt>
                                                        <dd class="col-sm-7">{{ $history->pet_type }}</dd>

                                                        <dt class="col-sm-5">Jenis Kelamin Hewan</dt>
                                                        <dd class="col-sm-7">{{ $history->pet_gender }}</dd>

                                                        <dt class="col-sm-5">Keluhan/Layanan</dt>
                                                        <dd class="col-sm-7">{{ $history->service->name }}</dd>

                                                        <dt class="col-sm-5">Harga</dt>
                                                        <dd class="col-sm-7">Rp {{ $history->service->price }}</dd>

                                                        <dt class="col-sm-5">Status</dt>
                                                        <dd class="col-sm-7">
                                                            @if ($history->status == 'Pending')
                                                                <label class="badge badge-warning">{{ $history->status }}</label>
                                                            @elseif ($history->status == 'Accepted')
                                                                <label class="badge badge-primary">{{ $history->status }}</label>
                                                            @elseif ($history->status == 'Rejected')
                                                                <label class="badge badge-danger">{{ $history->status }}</label>
                                                            @else
                                                                <label class="badge badge-success">{{ $history->status }}</label>
                                                            @endif
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
