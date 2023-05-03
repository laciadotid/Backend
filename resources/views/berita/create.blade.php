@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Berita Baru</h4>
                    <form class="forms-sample" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- title --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">title</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="title" placeholder="Nama pelayanan">
                        </div>

                        {{-- slug --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">slug</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="slug" placeholder="Nama pelayanan">
                        </div>

                        {{-- metadescription --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">metadescription</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="metaDescription" placeholder="Nama pelayanan">
                        </div>

                        {{-- featureimage --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">featureimage</label>
                            <input type="file" class="form-control" id="exampleInputUsername1" name="featuredImage" placeholder="Nama pelayanan">
                        </div>

                        {{-- date --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">date</label>
                            <input type="date" class="form-control" id="exampleInputUsername1" name="date" placeholder="Nama pelayanan">
                        </div>

                        {{-- content --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">content</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="content" placeholder="Nama pelayanan">
                        </div>

                         {{-- post_author otomatis --}}

                        {{-- post_category --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">post_category</label>
                            <select class="form-control js-example-basic-single" id="category" name="post_category" style="height: 50px !important">
                                <option selected disabled>Pilih Kategory</option>
                                @foreach($category as $cty)
                                    <option value="{{ $cty->id }}">{{ $cty->title }}</option>
                                @endforeach
                            </select>
                        </div>




                        {{-- <a href="{{ route('berita.index') }}" class="btn btn-light">Cancel</a> --}}
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
