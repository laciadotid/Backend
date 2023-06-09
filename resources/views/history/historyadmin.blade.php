@extends('layouts.master')

@section('contents')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">History Pembayaran</h4>
                   
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>penulis</th>
                                    <th>no rekening</th>
                                    <th>Judul postingan</th>
                                    <th>gambar struk</th>
                                    <th>saldo</th>
                                    <th>date</th>
                                    <th>action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historyadmin as $key => $pyt)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td value="{{ $pyt->id }}">{{ $pyt->name }}</td>
                                        <td value="{{ $pyt->id }}">{{ $pyt->norekening }}</td>
                                        <td value="{{ $pyt->id }}">{{ $pyt->title }}</td>
                                        <td>
                                            <img src="{{ asset('fotostruk/'.$pyt->featuredImage) }}" alt="">
                                        </td>
                                        <td>{{ $pyt->money }}</td>
                                        <td>{{$pyt->created_at->format('d M Y')}}</td>
                                       <td> <a href="{{ route('history.detailhistoryadmin', $pyt->id) }}">Detail</a></td>
                                        
                                       
                                    </tr>
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
