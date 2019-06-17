<!DOCTYPE html>
<html lang="en">
<head>
  <title>LaraBook- @yield('title','index')</title>
  @include('LaraBook.link')
</head>

<body>
    <div class="container">
      <h1 class="text-center ">Wel come to My Lara-Book</h1>
      <!-- table yield row -->
      <div class="row">
        <div class="col-md-2">
            @include('LaraBook.dropdown')
        </div>

        <div class="col-md-9">
          @yield('table')
        </div>
      </div>
      <!-- end table yield row -->
      <br>
      <div class="row">
        <!-- content that will be overwrite by child -->
        <div class="col-md-12">
          @section('content')
            <img src="{{asset('images/laravel.jpg')}}" height="380px" width="750px"alt="">
            <h3>By Taylor Otwell</h3>
            <h4> Laravel's first beta release was made available on June 9, 2011, followed by the Laravel 1 release later in the same month.</h4>
            <p>
            Laravel. Laravel is a free, open-source PHP web framework, created by   Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony.
            </p>
          @show
        </div>  
      </div>
      <!-- end of content row -->
      <div class="row ">
        <div class="col-md-8 offset-md-2">
          @yield('table2')
        </div>
      </div>
      <!-- end table2 row -->
      <div class="row ">
        <div class="col-md-8 offset-md-2">
          @yield('table3')
        </div>
      </div>
    </div>
    <!-- container end -->

</body>
</html>
