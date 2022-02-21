@extends('layout.master')
@section('title','Perusahaan')
@include('layout.header')

<body>
  @section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          
          <h1>Profile Perusahaan</h1>
          <div class="section-header-breadcrumb">
            {{-- <div class="breadcrumb-item active"><a href="#">F</a></div>--}}
            {{-- <div class="breadcrumb-item"><a href="{{ url('proyek') }}">Dashboard</a></div> 
            <div class="breadcrumb-item active">Profile Perusahaan</div>--}}
          </div>
        </div>
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Upsss</h2>
                            <p class="lead">Lengkapi data diri dulu yukk</p>
                        <div class="mt-4">
                        <a href="{{url('perusahaan/create')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> +Tambah</a>
                        </div>
                    </div>
                </div>
      </section>
    </div>
  @yield('content')
</body>

@push('page-scripts')
@endpush      
</html> 


