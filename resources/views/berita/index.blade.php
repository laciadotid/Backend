@extends('layouts.master')

@section('contents')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Berita</h4>
                    <p class="card-description">
                        <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm">Tambah Berita</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>slug</th>
                                    <th>featuredImage</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $key => $brt)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $brt->title }}</td>
                                        <td>{{ $brt->slug}}</td>
                                       
                                        <td>
                                            <img src="{{ asset('fotoberita/'.$brt->featuredImage) }}" alt="">
                                        </td>
                                        <td>{{ $brt->created_at->format('d M Y')}}</td>
                                        <td>
                                            <a href="{{ route('berita.edit', $brt->id) }}">Edit</a> |

                                          
                                        </td>
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
