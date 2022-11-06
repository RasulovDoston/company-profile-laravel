@extends('layouts.template')

@section('judul')
Create Pengumuman
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
        <h2>Create Pengumuman</h2>

      <form method="post" action="{{url('/dashboard/pengumuman-create')}}">
        @csrf

        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="form-group">
                <label>Konten</label>
                <textarea name="" id="" cols="30" rows="10">
                    
                </textarea>
                </div>

            </div>
        </div>
      </form>
    </div>
</section>
@endsection