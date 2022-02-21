@extends('layout.master')
@section('title','Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
                    
            <h1>{{ $proyek->judul }}</h1> </div>
<div class="card author-box card-primary">
    <div class="card-body">
      
     
        <div class="author-box-name">
          <a>{{ $proyek->tgl_mulai }} - {{ $proyek->tgl_selesai }}</a>
        </div>
        <div class="author-box-job">{{ $proyek->user->nama_perusahaan}}</div>
        <div class="author-box-description">
          <p>{{ $proyek->detail }}</p>
          <a class="btn btn-icon btn-info" href="{{ url('/proyek/dl/' . ($proyek->file)) }}">Download</td>
          <a>Salary : {{ $proyek->harga }}</a>
        </div>
        
        <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Author : {{ $proyek->user->name }}</div></div>
        
        <div class="w-100 d-sm-none"></div>
        <div class="float-right mt-sm-0 mt-3">
          <a href="{{url('proyek/')}}" class="btn">Back <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

</div>
</section>
@yield('content')
</body>


@push('page-scripts')
@endpush      
</html>