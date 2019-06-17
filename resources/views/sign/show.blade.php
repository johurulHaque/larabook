@extends('sign.master')

@section('title','show')

@section('content')
  <table class="table table-dark">
  <thead>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
  </tr>
  </thead>
  <tbody>

  @foreach ($datas as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->number}}</td>
        <td>
          {{-- {{route('show',$stu->id)}} --}}
          <a href="{{route('edit',$data->id)}}" class="btn btn-success">Edit</a>
          <a href="{{route('delete',$data->id)}}" class="btn btn-danger">Delete</a>
          {{-- <form class="form-inline" action="{{route('delete',$data->id)}}" method="post">
            {{csrf_field()}}
            <input type="submit" class="btn btn-danger" value="delete">
          </form> --}}
        </td>

    </tr>
  @endforeach

  </tbody>
  </table>

@endsection
