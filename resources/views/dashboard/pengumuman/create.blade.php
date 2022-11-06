@extends('layouts.template')

@section('judul')
Create Pengumuman
@endsection

@section('extrajs')
<script src="{{asset('/vendor/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
        <h2>Create Pengumuman</h2>

        @include('errors.message')

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
                <textarea name="konten" class="form-control" required></textarea>
                </div>

                <div class="btn-group">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
      </form>
    </div>
</section>
@endsection

@section('extrajs')
<script>
    ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .catch( error => {
            // console.error( error );
        } );
</script>

@endsection