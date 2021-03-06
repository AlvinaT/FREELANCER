@extends('layout.master')
@section('title','Proyek')
@include('layout.header')
<!-- Main Content -->
@section('content')
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            
            <h1>Data Proyek</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active">Table Proyek</div>
            </div>
          </div>

          @foreach ($user as $no => $data)
<div class="card profile-widget">
    <div class="profile-widget-header">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
      <div class="profile-widget-items">
        <div class="profile-widget-item">
          <div class="profile-widget-item-label">Posts</div>
          <div class="profile-widget-item-value">187</div>
        </div>
        <div class="profile-widget-item">
          <div class="profile-widget-item-label">Followers</div>
          <div class="profile-widget-item-value">6,8K</div>
        </div>
        <div class="profile-widget-item">
          <div class="profile-widget-item-label">Following</div>
          <div class="profile-widget-item-value">2,1K</div>
        </div>
      </div>
    </div>
    <div class="profile-widget-description pb-0">
      <div class="profile-widget-name">Hasan Basri <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p>
    </div>
    <div class="card-footer text-center pt-0">
      <div class="font-weight-bold mb-2 text-small">Follow Hasan On</div>
      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="btn btn-social-icon mr-1 btn-github">
        <i class="fab fa-github"></i>
      </a>
      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>
</section>
@yield('content')
</body>