{{-- Multidimentional multiD @includen file--}}
{{-- Multidimentional multiD @includen file--}}
@foreach($original['name'] as $key => $value)
	<dt>{{ $value }} Details</dt>
	<dd>
	<ul>
		<li>Name: {{ $value }}</li>
		<li>Email: {{ $original['email'][$key] }}</li>
		<li>Phone Number: {{ $original['phone_number'][$key] }}</li>
	</ul>
	</dd>
	@endforeach