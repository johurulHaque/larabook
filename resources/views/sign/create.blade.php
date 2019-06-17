@extends('sign.master')
@section('title','create')


@section('content')
  <form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif --}}
    {{csrf_field()}}

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Your Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name"  data-parsley-maxlength="3" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="emai">Your Mail:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="eamil" data-parsley-type="alphanum" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Your Number:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="number" id="number" data-parsley-type="alphanum" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Register student</button>
    </div>
  </div>
</form>
@endsection
