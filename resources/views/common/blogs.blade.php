@extends('layout.main-master')
@section('content')

<main class="container">
    <div class="row">
            @foreach($blogs as $blog)
                @if ($blog['status'] == 0)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Vite::asset('resources/images/eatingCat.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $blog->title}} </h5>
                            {{-- <p class="card-text"> Category {{ $blog->category->name  }} </p> --}}
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @else
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/eatingCat.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $blog->title}} </h5>
                        {{-- <p class="card-text"> Category {{ $blog->category->name }} </p> --}}
                    </div>
                </div>
                @endif
            @endforeach
        {{ $blogs->links() }}
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
