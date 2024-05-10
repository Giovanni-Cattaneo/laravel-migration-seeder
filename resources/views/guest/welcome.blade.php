@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row">


            @forelse($trains as $key => $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informazioni:</h4>
                            <p class="card-text">Partenza: {{ $train->departures_station }}</p>
                            <p class="card-text">Arrivo: {{ $train->arrival_station }}</p>
                            <p class="card-text">Data: {{ $train->day_of_departures }}</p>
                            <p class="card-text">In orario: {{ $train->on_time }}</p>
                            <p class="card-text">Cancellato: {{ $train->canceled }}</p>
                        </div>
                    </div>
                </div>


            @empty
                <p>Non ci sono treni mi dispiace</p>
            @endforelse
        </div>
    </div>
@endsection
