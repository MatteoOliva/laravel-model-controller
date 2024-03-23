@extends('layouts.app')

@section('title', 'homepage')

@section('main-content')
  <section>
    <div class="container py-4">
        <div class="row">
        @foreach($movies as $movie)
        <div class="col-5">
        <div class="card h-100">
            <ul>
                <li>{{$movie->title}}</li>
                <li>{{$movie->original_title}}</li>
                <li>{{$movie->nationality}}</li>
                <li>{{$movie->date}}</li>
                <li>{{$movie->vote}}</li>
            </ul>
        </div>
        </div>
        @endforeach
    </div>
    </div>
    

    
  </section>
@endsection
