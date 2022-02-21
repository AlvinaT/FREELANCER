@extends('layout.master')
@section('title','Perusaahaan')
@include('layout.header')

<body>
  @section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          
          <h1>Profile</h1>
          <div class="section-header-breadcrumb">
            {{-- <div class="breadcrumb-item active"><a href="#">F</a></div>--}}
            {{-- <div class="breadcrumb-item"><a href="{{ url('proyek') }}">Dashboard</a></div>  --}}
            <div class="breadcrumb-item active">Profile Perusahaan</div>
          </div>
        </div>
                   <div class="card">
                      <div class="card-header">
                        <h4>Profile Information</h4>
                      </div>
                      <div class="card-body">
                        @if (session("success"))
                        <div class="alert alert-primary">{{ session('success') }}</div>
                      @endif
                      @if ($errors->any())
                          <div class="alert alert-danger" role="alert">
                              {!! implode('', $errors->all('<li>:message</li>')) !!}
                          </div>
                      @endif
                      <form action="{{url('perusahaan/store')}}">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                          </div>
                          <div class="form-group">
                            <label>Detail</label>
                            <input type="text" class="form-control" name="detail" value="{{ old('detail') }}">
                          </div>
                          <div class="form-group">
                            <label>History</label>
                            <select type="text" class="form-control" name="history" value="{{ old('history') }}">
                              <option disabled selected>Pilih Proyek</option>
                              @foreach ($proyek as $data)
                              <option value="{{ $data->id_proyek }}">{{ $data->judul }}</option>    
                              @endforeach
                            </select>
                          </div>
                          <div class="card-footer text-right">
                            
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        </div>
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