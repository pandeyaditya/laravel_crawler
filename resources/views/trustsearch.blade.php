@extends('form')
@section('content')
@if(empty($data)){
  <p> No results found </p>
@else
  <h3> Reviews </h3>

      {!! $data['reviews_list'] !!}
  @endif
@endsection