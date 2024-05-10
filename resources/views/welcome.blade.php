@extends('layouts.app')

@section('content')
  <div class="bg-light">
    <div class="container-fluid py-5" style="height: calc(100vh - (56px + 233.6px));">
      <h1 class="display-5 fw-bold mb-5">Benvenuti su TrainChecker</h1>
      <p class="col-md-8 fs-4 mb-5">
        Visualizzate tute le partenze di oggi!
        <br>
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>
      <button class="btn btn-primary btn-lg" type="button">
        <a class="text-decoration-none text-white" href="{{ route('guests.trains.index') }}">
          Visualizza partenze
        </a>
      </button>
    </div>
  </div>
@endsection
