@extends('layouts.master')

@section('contents')
<div class="content-wrapper">


<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">




        

            <!--  daftar berita -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">daftar berita</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>slug</th>
                                    <th>featuredImage</th>
                                    <th>Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarberitaview as $key => $brt1)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $brt1->title }}</td>
                                        <td>{{ $brt1->slug}}</td>
                                      
                                        <td>
                                            <img src="{{ asset('fotoberita/'.$brt1->featuredImage) }}" alt="">
                                        </td>
                                        <td>{{ $brt1->created_at->format('d M Y')}}</td>
                                 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

 <!-- daftar berita -->

 <!--  pembayaran -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pembayaran</h4>
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
                                @foreach ($daftarberita as $key => $brt)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $brt->title }}</td>
                                        <td>{{ $brt->slug}}</td>
                                      
                                        <td>
                                            <img src="{{ asset('fotoberita/'.$brt->featuredImage) }}" alt="">
                                        </td>
                                        <td>{{ $brt->created_at->format('d M Y')}}</td>
                                        <td>
                                            <a href="{{ route('daftarberita.pembayaran', $brt->id) }}">Pembayaran</a> |

                                            {{-- <form action="{{ route('kategori.destroy', $cty->id) }}" method="post" class="d-inline">

                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="this.closest('form').submit(); return false;">Delete</a>
                                            </form> --}}
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
 <!-- batas pembayaran -->
</div>
@endsection
