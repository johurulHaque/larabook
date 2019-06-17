@extends('LaraBook.index')
@section('title','model')

@section('content')
  <h1>Model at a galance</h1>
    
  <ul style="list-style-type:decimal;font-size: 17px;">
    <li class="alert alert-success">Singular name of model represent its plural table  & interact with that table.</li>
    <li class="alert alert-success">Each DB table has a Model that you to query in DB for table data </li>
    <li class="alert alert-success">Model represent a table & Data will be inters in DB through model object</li>
    <li class="alert alert-danger">Eloquent is a way that make ralation between model object & DB table for interaction.(my)</li>
  </ul>
@endsection
