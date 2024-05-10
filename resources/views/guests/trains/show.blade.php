@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <div class="row">
      <div class="col-7">
        <img class="img-fluid" src="{{ $hat->image }}" alt="Image of {{ $hat->name }}">
      </div>
      <div class="col-5">
        <h3 class="card-title">{{ strtoupper($hat->name) }}</h3>
        <div>{{ $hat->price ? '€' . ' ' . $hat->price : 'Call for price' }}</div>
      </div>
    </div>
  </div>
  </div>
@endsection
