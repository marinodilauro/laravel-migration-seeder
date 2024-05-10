@extends('layouts.app')

@section('content')
  <div class="p-5 mb-4 bg-light">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Partenze</h1>
      <p class="col-md-8 fs-4">
        Tutti i treni in partenza oggi
      </p>
    </div>
  </div>

  <div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      @forelse ($trains as $train)
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">{{ strtoupper($train->departure_station) }}</h3>
              <h3 class="card-title">{{ strtoupper($train->departure_time) }}</h3>
              <h3 class="card-title">{{ strtoupper($train->arriving_station) }}</h3>
              <h3 class="card-title">{{ strtoupper($train->arriving_time) }}</h3>
              <h3 class="card-title">{{ strtoupper($train->company) }}</h3>
              <h3>{{ $train->train_type ?? '' }}</h3>
              <h3>{{ $train->train_code }}</h3>
              <h3 class="card-title">{{ strtoupper($train->carriages) }}</h3>
              <h3>{{ !$train->in_time ? 'Treno in ritardo' : '' }}</h3>
              <h3>{{ $train->cancelled ? 'Treno cancellato' : '' }}</h3>
            </div>
          </div>
        </div>

      @empty
        <div class="col">
          No hats here, sorry!
        </div>
      @endforelse
    </div>
  </div>
@endsection
