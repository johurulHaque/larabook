<ul>
  <li>{{ $data -> id }}</li>
</ul>


{{-- <table class="table table-hover table-active">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($data as $data)
    <tr>
      <td>{{ $data ->id }}</>td
      <td>{{ $data ->name }}</td>
      <td>{{ $data ->category }}</td>
      <td>{{ $data ->name }}</td>
      <td>{{ $data ->price }}</td>
    </tr>
  @endforeach
  </tbody> --}}

{{-- </table> --}}
{{-- <div class="container">
  <div class="row">
    @foreach ($data as $data)
    <div class="col-md-3">       
          <div class="jumbotron">
            <h1 class="display-3">{{ $data ->category }}</h1>
            <p class="lead">{{ $data ->name }}</p>
            <hr class="my-4">
            <p>{{ $data ->price }}</p>
            <button class="btn btn-success">buy</button>
          </div>

    </div>
    @endforeach
  </div>
</div> --}}
