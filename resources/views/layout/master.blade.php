<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-success">
    <h1 class="text-center fw-bold"> Hello from master </h1>

    <div class="container-sm border border-black">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="fw-bold form-label">Email address</label>
            <input type="email" class="border border-black form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="fw-bold form-label">Example textarea</label>
            <textarea class="border-black form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button> Submit </button>
    </div>

    <div class="mt-2 container border">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 1 </div>
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 2 </div>
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 3 </div>
        </div> 

        <div class="row mt-2">
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 4 </div>
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 5 </div>
            <div class="col-lg-4 col-md-6 col-sm-12 border border-primary bg-secondary"> Column 6 </div>
        </div>  
    </div>

</body>
</html>