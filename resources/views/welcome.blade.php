<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>@yield('title','home')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
</head>

<body>


<div class="container">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($serve as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>

        <td>{{$value->number}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>


<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('js/parsley.min.js')}}"></script> --}}
</body>

</html>
