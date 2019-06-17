<div class="dropdown dropright">
  {{-- triger for dropdown --}}
  <button class="dropdown-toggle  btn btn-success" data-toggle="dropdown">Work next 
  <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span>
  </button>

  {{-- what item will be dropdown--}}
  <div class="dropdown-menu">
    <a class="dropdown-item btn btn-info" href="{{ route('index') }}" style="color:white;">Index</a>
    <a class="dropdown-item btn btn-info" href="{{ route('blade') }}" style="color:white;">Blade template</a>
    <a class="dropdown-item btn btn-info" href="{{ route('route') }}" style="color:white;">Route</a>
    <a class="dropdown-item btn btn-info" href="{{ route('migration') }}" style="color:white;">Migration</a>
    <a class="dropdown-item btn btn-info" href="{{ route('model') }}"  style="color:white;">Model</a>
    <a class="dropdown-item btn btn-info" href="{{ route('formvalidation') }}"  style="color:white;">formvalidation</a>
    <a class="dropdown-item btn btn-info" href="{{ route('controller') }}"  style="color:white;">controller</a>
    <a class="dropdown-item btn btn-info" href="{{ route('query') }}"  style="color:white;">query</a>
    <a class="dropdown-item btn btn-info" href="{{ route('middleware') }}" style="color:white;">Middleware</a>
        {{-- <div class="dropdown-divider"></div> --}}
    <li class="divider"></li>
    <li><a href="#" class="btn btn-info">blade </a></li>
  </div>
</div>
