@extends('layout.main-master')
@section('content')

<main class="container">
    <div class="row">
            @foreach($results as $result)
            @if($result->status == 0)
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/eatingCat.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $result->title}} </h5>
                        <p class="card-text"> Category {{ $result->name  }} </p>
                        <small class="card-text"> Category {{ $result->description  }} </small>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @else
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/eatingCat.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $result->title}} </h5>
                        <p class="card-text"> Category {{ $result->name  }} </p>
                        <small class="card-text"> Category {{ $result->description  }} </small>
                    </div>
                </div>
            @endif
            @endforeach
    </div>
</main>

@endsection
<style>
    .card:hover{
        transform:scale(1.1) ;
    }

    .card{
        transition: transform 0.3s ease;
    }
</style>
