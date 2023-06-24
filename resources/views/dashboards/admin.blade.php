@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Postingan Terbaru</p>
                    <div class="table-responsive">
                         <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>judul</th>
                                    <th>deskripsi</th>
                                    <!-- <th>gambar</th> -->
                                    <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($postinganadn as $ptn)
                                    <tr>
                                        <td>{{ $ptn->title }}</td>
                                        <td>{{ $ptn->metaDescription }}</td>
                                       
                                      
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
                            <p class="mb-4">Penulis</p>
                            <p class="fs-30 mb-2">{{ $all }}</p>

                        </div>
                    </div>
                </div>

              

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
@endpush
