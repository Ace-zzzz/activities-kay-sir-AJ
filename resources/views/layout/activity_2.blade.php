<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body> 
    <div class="row border bg-warning border-black">
        <div class = "col-lg-8 zzmt-2">
        <h1>BRAND</h1>
        </div>
        
        <div class = "col-lg-1 mt-4">
        <h6>Feature</h6>
        </div>

        <div class = "col-lg-1 mt-4">
        <h6>Enterprise</h6>
        </div>

        <div class = "col-lg-1 mt-4">
        <h6>Support</h6>
        </div>

        <div class = "col-lg-1 mt-4">
        <h6>Pricing</h6>
        </div>
    </div>

    <div class="container-sm row">
        <div class="col-4 mt-2">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="fw-bold form-label">Email address</label>
                <input type="email" class="border border-black form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
    
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="fw-bold form-label">Example textarea</label>
                <textarea class="border-black form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-flex gap-3">
                <button> Submit </button>
                <h5 class="text-primary center-block"> Forgot Password </h5>
            </div>
        </div>

        <div class="col-8 mt-2">
            <div>
                <h1 class="mx-4 text-center fw-bold"> Pricing </h1>
                <p class="mx-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque facilis voluptatibus ducimus quia quo aperiam praesentium. Inventore mollitia consequatur non! In nobis mollitia necessitatibus ab maiores animi repudiandae autem iste ex, excepturi sapiente saepe dolorum nesciunt ea quisquam vel accusamus fuga enim! Reprehenderit, repudiandae veniam! Excepturi consequatur quibusdam adipisci necessitatibus.
                </p>
            </div>

            <div class="row">
                <img class="h-25 w-25 mx-4 rounded-start-5" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
                <img class="h-25 w-25 mx-4" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
                <img class="h-25 w-25 mx-4 rounded-end-5" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
            </div>

            <div class="row mt-2">
                <img class="h-25 w-25 mx-4 rounded-start-5" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
                <img class="h-25 w-25 mx-4" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
                <img class="h-25 w-25 mx-4 rounded-end-5" src="{{ Vite::asset('resources/images/eatingCat.png') }}" alt="">
            </div>


            <h1 class="text-center"> Compare Plan </h1>
            <table class="table">
                <thead>
                  <tr>
                    <th class="border-bottom border-black" scope="col"></th>
                    <th class="border-bottom border-black" scope="col">Free Pro</th>
                    <th class="border-bottom border-black" scope="col">Enterprice</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fw-bold border-bottom border-black">Public</td>
                    <td class="border-bottom border-black"> ✔ ✔</td>
                    <td class="border-bottom border-black"> ✔ </td>
                  </tr>
                  <tr>
                    <td class="fw-bold border-bottom border-black">Private</td>
                    <td colspan="2" class="border-bottom border-black"> ✔ ✔</td>
                  </tr>
                  <tr>
                    <td class="fw-bold border-bottom border-black">Permission</td>
                    <td class="border-bottom border-black"> ✔</td>
                    <td class="border-bottom border-black"> ✔</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

</body>
</html>