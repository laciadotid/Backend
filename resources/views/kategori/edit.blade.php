@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit kategori</h4>
                    <form class="forms-sample" action="{{ route('kategori.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama kategori</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="title" placeholder="Nama kategori" value="{{ $category->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="deskripsi" value="{{ $category->description }}">
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
