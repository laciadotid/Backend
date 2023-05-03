@extends('layouts.master')

@section('contents')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Kategori</h4>
                    <p class="card-description">
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">Tambah kategori Baru</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $key => $cty)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $cty->title }}</td>
                                        <td>{{ $cty->description}}</td>
                                        <td>
                                            <a href="{{ route('kategori.edit', $cty->id) }}">Edit</a> |

                                            <form action="{{ route('kategori.destroy', $cty->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="this.closest('form').submit(); return false;">Delete</a>
                                            </form>
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
