@extends('layouts.template')

@section('judul')
Dashboard
@endsection

@section('extracss')
<style>
    .img-icon{
        height: 90px;
        width: 90px;
        object-fit: cover;
    }
</style>
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
            <a href="{{('/dashboard/berita')}}">
            <img src="{{asset('/image/icon/berita.png')}}" class="img-icon">
            <p>Manage Berita</p>
            </a> 
        </div> 

        <div class="col-md-4 text-center">
        <a href="{{('/dashboard/pengumuman')}}">
        <img src="{{asset('/image/icon/pengumuman.png')}}" class="img-icon">
        <p>Manage Pengumuman</p>
        </a>
        </div>   

        <div class="col-md-4 text-center">
        <a href="{{('/dashboard/user')}}">
        <img src="{{asset('/image/icon/user.png')}}" class="img-icon">
        <p>Manage User</p>
        </a>
        </div>

      </div>
    </div>
</section>
@endsection