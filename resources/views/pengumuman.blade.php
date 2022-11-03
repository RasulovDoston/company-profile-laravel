@extends('layouts.template')

@section('judul')
Pengumuman
@endsection

@section('main')
<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        welcome to pengumuman
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{asset('tema/img/about.jpg')}}" class="img-fluid" alt="">
    </div>

  </div>
</div>
@endsection