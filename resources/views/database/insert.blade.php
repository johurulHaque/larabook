<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-2">
          <h1>regitration</h1>
            <form action="{{ route('store') }}" method="post">
             {{--  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif --}}
              @csrf
              <div class="form-group">
                <label for="category">Category name</label>
                <input type="text"  class="form-control @error('category') is-invalid @enderror" name="category" id="category"  placeholder="Enter Product category" value="{{ old('category') }}">
       
                @error('category')
                  <div class="alert alert-success ">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="name">Product name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"  placeholder="Enter Product name">

                @error('name')
                  <div class="alert alert-success ">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="price">Product price</label>
                <input type="text" class="form-control" name="price" id="price"  placeholder="Enter Product price">
              </div>

              <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary">Register student</button>
              </div>

              {{-- <a type="button" href="" class="btn btn-success btn-block">Submit</a> --}}
          </form>
        </div>
        
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
            @include('database.show')
        </div>
      </div>
    </div>
</body>
</html>
