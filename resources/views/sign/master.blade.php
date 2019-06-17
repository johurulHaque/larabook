<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>@yield('title','Home')</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
  </head>
  <body>
{{--master >>nav_bar  --}}
{{--master >>nav_bar  --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-item nav-link active" href="{{route('master')}}">Home</a>
        </li>
{{-- if login user --}}
{{-- if login user can update --}}
        @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}">Create </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show')}}">Show</a>
          </li>
        @endif
      </ul>

      <form class="form-inline my-2 my-lg-0">
        @if (Auth::check())
              <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('home')}}">Dashboard</a>
          @else
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('login')}}">Sign in </a>
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('register')}}">Register</a>
        @endif
      </form>
    </div>
  </nav>

  @yield('content')


<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('js/parsley.min.js')}}"></script> --}}
  </body>
</html>
