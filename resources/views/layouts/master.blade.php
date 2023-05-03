@extends('layouts.base')

@section('content')
<div class="container-scroller">
    <!-- partial:partials/navbar -->
    @include('layouts.partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/setting -->
        @include('layouts.partials.setting')
        <!-- partial -->
        <!-- partial:partials/sidebar -->
        @include('layouts.partials.sidebar')
        <!-- partial -->
        <div class="main-panel">
            @yield('contents')
            <!-- content-wrapper ends -->
            <!-- partial:partials/footer -->
            @include('layouts.partials.footer') 
            <!-- partial -->
          </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection
