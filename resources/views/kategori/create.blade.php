@extends('layouts.master')

@section('contents')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Kategori Baru</h4>
                    <form class="forms-sample" action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama kategori</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="title" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">deskripsi kategori</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="deskripsi">
                        </div>
                        <a href="{{ route('kategori.index') }}" class="btn btn-light">Cancel</a>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
