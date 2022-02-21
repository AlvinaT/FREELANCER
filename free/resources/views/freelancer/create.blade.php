@extends('layout.master')

@section('title','Input')
@include('layout.header')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Freelancer</h1>
        <div class="section-header-breadcrumb">
          {{-- <div class="breadcrumb-item active"><a href="#">F</a></div> --}}
          <div class="breadcrumb-item"><a href="{{url('/freelancer')}}">Data Freelancer</a></div>
          <div class="breadcrumb-item active">Tambah Data</div>
        </div>
      </div>

      <div class="section-body">
         
        <div class="card">
            <form action="{{url('perusahaan/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                {{-- <form action="{{ route('proyek.simpan') }}" method="POST"> --}}
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
              </div>
              <div class="form-group">
                <label></label>
                <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
              </div>
              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis" value="{{ old('jenis') }}">
                  <option>Sistem Informasi</option>
                  <option>Design</option>
                  <option>Jaringan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Detail</label>
                <textarea class="form-control" name="detail" value="{{ old('detail') }}"></textarea>
              </div>
              <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" class="form-control" name="tgl_mulai" value="{{ old('tgl_mulai') }}">
              </div>
              <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" name="tgl_selesai" value="{{ old('tgl_selesai') }}">
              </div>
              
              <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ old('harga') }}">
              </div>
              <div class="form-group">
                <label>Progress</label>
                <input type="text" class="form-control" name="progres" value="{{ old('progress') }}">
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
              <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>