@extends('layouts/app')

@section('content')
<main>

    <div class="container py-5">
        <h1 class="mb-3">Films</h1>
    
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie['title']}}</h5>

                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
                    
                    <div class="card_details">
                    
                        <ul class="details">
                            <li class="nationality"><span>Nationality:</span> {{$movie['nationality']}}</li>
                            <li class="date"><span>Date:</span> {{$movie['formattedDate']}}</li>
                            <li class="vote"><span>Vote:</span> {{$movie['vote']}}</li>
                        </ul>
                        
                    </div>                   
                </div>
            </div>
            @endforeach
        </div>
    
    
    
    </div>
</main>
@endsection