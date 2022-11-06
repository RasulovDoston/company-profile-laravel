@extends('layouts.template')

@section('judul')
Pengumuman
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
      <a href="{{url('/dashboard/pengumuman-create')}}" class="btn btn-success">
        Create Pengumuman
      </a>

      <div class="row mt-4">
        <div class="col-md-12">
            List pengumuman
        </div>
      </div>
    </div>
</section>
@endsection