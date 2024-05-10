<header>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link {{ Route::currentRouteName() === 'guests.index' ? 'active' : '' }}"
        href="{{ route('guests.index') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
      <a class="nav-item nav-link {{ Route::currentRouteName() === 'guests.trains.index' ? 'active' : '' }}"
        href="{{ route('guests.trains.index') }}">Tutte le partenze</a>
    </div>
  </nav>
</header>
