@extends('layouts.master')

@section('contents')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card p-3">
            <div class="card p-5">

            <h2>Detail riwayat saldo</h2>
            <br>

            @foreach ($detailhistorycustomer as $key => $dha)

         
            <!-- <div class="form-group">
                <label for="exampleInputUsername1">Nama Penulis</label>
                <input type="text" class="form-control" id="exampleInputUsername1"  value="{{ $dha->id }}" readonly>
            </div>
            
            
            <div class="form-group">
                <label for="exampleInputUsername1">No Rekening</label>
                <input type="text" class="form-control" id="exampleInputUsername1"  value="{{ $dha->norekening }}" readonly>
            </div> -->
            
           
            <div class="form-group">
                <label for="exampleInputUsername1">title</label>
                <input type="text" class="form-control" id="exampleInputUsername1"  value="{{ $dha->title }}" readonly>
            </div>
           
            <label>Foto Struk</label>
            <img width="50%" height="50%" src="{{ asset('fotostruk/'.$dha->featuredImage) }}" alt="">
            <br>
            
            <div class="form-group">
                <label for="exampleInputUsername1">Money</label>
                <input type="text" class="form-control" id="exampleInputUsername1"  value="{{ $dha->money }}" readonly>
            </div>
            
            <div class="form-group">
                <label for="exampleInputUsername1">Tanggal</label>
                <input type="text" class="form-control" id="exampleInputUsername1"  value="{{  $dha->created_at->format('d M Y') }}" readonly>
            </div>
            
            

           
                                            
            @endforeach

            </div>
        </div>
    </div>

</div>
@endsection
