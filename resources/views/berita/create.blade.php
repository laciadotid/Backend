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
                            <label for="exampleInputUsername1">Judul Postingan</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="title" placeholder="Title">
                        </div>

                        {{-- slug --}}
                        {{-- <div class="form-group">
                            <label for="exampleInputUsername1">Link</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="slug" placeholder="Nama pelayanan">
                        </div> --}}

                        {{-- metadescription --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">Deskripsi Singkat Postingan</label>
                            <textarea  class="form-control" id="exampleInputUsername1" rows="4" name="metaDescription" placeholder="Meta Description"> </textarea>
                        </div>

                        {{-- featureimage --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">Gambar Postingan</label>
                            <input type="file" class="form-control" id="exampleInputUsername1" name="featuredImage" placeholder="Featured Image">
                        </div>

                        {{-- date --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputUsername1" name="date" placeholder="Date">
                        </div>


                          {{-- post_category --}}
                          <div class="form-group">
                            <label for="exampleInputUsername1">Kategori</label>
                            <select class="form-control js-example-basic-single" id="category" name="post_category" style="height: 50px !important">
                                <option selected disabled>pilih category</option>
                                @foreach($category as $cty)
                                    <option value="{{ $cty->id }}">{{ $cty->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- content --}}
                        <div class="form-group">
                            <label for="exampleInputUsername1">Deskripsi Panjang Postingan</label>
                            <textarea class="form-control" id="exampleInputUsername1" rows="8" name="content" placeholder="description content"> </textarea>
                        </div>

                         {{-- post_author otomatis --}}






                        {{-- <a href="{{ route('berita.index') }}" class="btn btn-light">Cancel</a> --}}
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
