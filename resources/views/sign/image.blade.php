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

    <div class="upload-image">
        <h3>Please insert image here</h3>
    </div>
    <form class="" action="{{route('store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="title" name="title" value="">
      <input type="file" name="image" value="">
      <input type="submit" value="upload">
    </form>
    <table class="table table-dark">
    <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Image</th>

    </tr>
    </thead>
    <tbody>

    @foreach ($image as $image)
        <tr>
          <td>{{$image->id}}</td>
          <td>{{$image->title}}</td>
          <td> <img src="{{Storage::url($image->image)}}" alt="" height="80px" class="img-rounded center-block"></td>
      </tr>
    @endforeach

    </tbody>
    </table>

<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('js/parsley.min.js')}}"></script> --}}
  </body>
</html>
