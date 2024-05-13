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
    <div class="row flex-column g-4">
      @forelse ($trains as $train)
        <div class="col">
          <div class="card">

            <div class="card-body">

              <h4 class="card-title">{{ $train->company }}</h4>

              <div id="train_type" class="mb-3">
                <span>{{ $train->train_type ?? '' }}</span>
                <span class="mx-3">{{ $train->train_code }}</span>
                <span>Carrozze: {{ $train->carriages }}</span>
              </div>

              <div class="row mb-3">

                <div class="col-6">
                  <div id="departure">

                    <h5>Partenza</h5>

                    <p class="me-4">Stazione di partenza:
                      <strong>{{ $train->departure_station }}</strong>
                    </p>

                    <p class="m-0">Orario di partenza:
                      <strong>{{ substr($train->departure_time, 11, 15) }}</strong>
                    </p>

                  </div>
                </div>

                <div class="col-6">
                  <div id="arriving">

                    <h5>Arrivo</h5>

                    <p class="me-4">Stazione di arrivo:
                      <strong>{{ $train->arriving_station }}</strong>
                    </p>

                    <p class="m-0">Orario di arrivo:
                      <strong>{{ substr($train->arriving_time, 11, 15) }}</strong>
                    </p>

                  </div>
                </div>
              </div>

              <span class="text-danger"><strong>{{ !$train->in_time ? 'Treno in ritardo' : '' }}</strong></span>
              <span class="text-danger"><strong>{{ $train->cancelled ? 'Treno cancellato' : '' }}</strong></span>

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
