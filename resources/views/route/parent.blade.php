@extends('route.master')
@section('title', 'parent')
@push('css')
	<link rel="stylesheet" href="{{ asset('css/tutorial/style.css') }}">
@endpush

{{-- In a simple array --}}
{{-- In a simple array --}}
@section('array')
	<h3>This is simple array</h3>
	@forelse($iteam as $key =>  $value)
	{{$value['name']}}
		<li>{{  $key }}</li>
	
	
	@empty
		<li>sorry no data exist</li>

	@endforelse
	
	@php
	 print_r($iteam) ;
	@endphp
	{{-- @each('route.child1',$data['name'],'data','route.empty') --}}
@endsection

{{-- Multidimentional 1D --}}
{{-- Multidimentional 1D --}}



{{-- Multidimentional MultiD --}}
{{-- Multidimentional MultiD --}}
{{-- @section('multi')
	@include('route.child2')
@endsection --}}
