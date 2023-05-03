@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pembayaran</h4>
                    <form class="forms-sample" action="{{ route('daftarberita.bayar', $pembayaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputUsername1">title</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Nama pelayanan" value="{{ $pembayaran->title }}">
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="price" placeholder="Harga" value="{{ $service->price }}">
                        </div> --}}


                        <div class="form-group">
                            <label for="exampleInputEmail1">pembayaran</label>
                            <input type="number" class="form-control" id="exampleInputUsername1" name="money" placeholder="pembayaran" >
                        </div>

                          {{-- post_category --}}

                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="payment_post" value="{{ $pembayaran->id }}"
                                placeholder="Nama hewan">


                        <a href="{{ route('daftarberita.index') }}" class="btn btn-light">Cancel</a>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
