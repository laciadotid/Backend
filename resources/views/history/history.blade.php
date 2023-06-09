@extends('layouts.master')

@section('contents')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">History Penghasilan</h4>
                   
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Postingan</th>
                                    <th>gambar struk</th>
                                    <th>Uang Penghasilan</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($history as $key => $pyt)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td value="{{ $pyt->id }}">{{ $pyt->title }}</td>
                                        <td>
                                            <img src="{{ asset('fotostruk/'.$pyt->featuredImage) }}" alt="">
                                        </td>
                                        <td>{{ $pyt->money }}</td>
                                        <td>{{$pyt->created_at->format('d M Y')}}</td>
                                       
                                        <td> <a href="{{ route('history.detailhistorycustomer', $pyt->id) }}">Detail</a></td>
                                       
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
