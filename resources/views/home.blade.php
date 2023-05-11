@extends('layouts/main')

@section('content')
    @foreach ($movies as $movie)
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
            <h4 class="nation">{{$movie->nationality}}</h4>
            <h4 class="date">{{$movie->date}}</h4>
            <h3 class="vote">{{$movie->vote}}</h3>
            </div>
        </div>
    
    @endforeach
@endsection