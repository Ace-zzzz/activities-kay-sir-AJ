@extends('layout.main-master')

@section('content')
{{-- <div id="carouselExampleFade" class="carousel slide carousel-fade mx-3 my-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ Vite::asset('resources/images/cat.png') }}" 
             class="d-block w-100" alt="error">
      </div>

      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
             class="d-block w-100" alt="error">
      </div>

      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/images/cat.png') }}" 
             class="d-block w-100" alt="error">
      </div>
    </div>

    <button class="carousel-control-prev" 
            type="button" 
            data-bs-target="#carouselExampleFade" 
            data-bs-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" 
            type="button" 
            data-bs-target="#carouselExampleFade" 
            data-bs-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="accordion mx-3" id="accordionExample">
            <!-- Accordion Item 1 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseOne" 
                            aria-expanded="true" 
                            aria-controls="collapseOne">
                            Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        This is the first item's accordion body.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 2 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseTwo" 
                            aria-expanded="false" 
                            aria-controls="collapseTwo">
                            Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        This is the second item's accordion body.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 3 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseThree" 
                            aria-expanded="false" 
                            aria-controls="collapseThree">
                            Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        This is the third item's accordion body.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 4 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseFour" 
                            aria-expanded="false" 
                            aria-controls="collapseFour">
                            Accordion Item #4
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        This is the fourth item's accordion body.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 5 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseFive" 
                            aria-expanded="false" 
                            aria-controls="collapseFour">
                            Accordion Item #5
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        This is the fourth item's accordion body.
                    </div>
                </div>
            </div>
            <!-- Accordion Item 6 -->
            <div class="accordion-item bg-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary-subtle" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseSix" 
                            aria-expanded="false" 
                            aria-controls="collapseFour">
                            Accordion Item #6
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        This is the fourth item's accordion body.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="row">
            <!-- Card 1 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 1</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 2</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 3</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 4</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 5</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="card col-lg-3 mb-2 mx-3">
                <img src="{{ Vite::asset('resources/images/eatingCat.png') }}" 
                     class="card-img-top" 
                     alt="error">

                <div class="card-body">
                    <p class="card-text">Card content 6</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f8f9fa;">
    <div class="card p-4 shadow-sm" style="max-width: 500px; width: 100%; border-radius: 16px; background-color: #ffffff;">
        <form>
            <!-- Dropdown -->
            <div class="dropdown mb-4">
                <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Category
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sports</a>
                    <a class="dropdown-item" href="#">Education</a>
                    <a class="dropdown-item" href="#">Entertainment</a>
                </div>
            </div>

            <!-- Title Input -->
            <div class="form-group mb-4">
                <label for="exampleInputTitle">Title</label>
                <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
            </div>

            <!-- Description Input -->
            <div class="form-group mb-4">
                <label for="exampleInputDescription">Description</label>
                <textarea class="form-control" id="exampleInputDescription" placeholder="Enter Description" rows="4"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </div>
</div>

@endsection
