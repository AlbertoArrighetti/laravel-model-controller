@extends('layouts/app')

@section('content')
<main>

    <div class="container">
        <h1>Films</h1>
    
        <div class="row row-cols-3 row-gap-4">
            @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie['title']}}</h5>

                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
                    
                    <div class="card_details">
                    
                        <ul>
                            <li class="nationality">{{$movie['nationality']}}</li>
                            <li class="date">{{$movie['formattedDate']}}</li>
                            <li class="vote">{{$movie['vote']}}</li>
                        </ul>
                        
                    </div>                   
                </div>
            </div>
            @endforeach
        </div>
    
    
    
    </div>
</main>
@endsection