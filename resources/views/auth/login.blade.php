@extends('layouts.template')

@section('judul')
Login 
@endsection

@section('ectracss')
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>
@endsection

@section('main')
<section class="vh-80 mt-4">
  <div class="container py-5 h-100">

    <div class="flash-massage">
        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-'.$msg))
            <p class="alert aler-{{$msg}}">
                {{ Session::get('alert-'.$msg)}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
          @endif  
        @endforeach
    </div>

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post" action="{{url('/login')}}">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control form-control-lg" required />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="password" class="form-control form-control-lg" required />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked />
              <label class="form-check-label" for="remember"> Remember me </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection