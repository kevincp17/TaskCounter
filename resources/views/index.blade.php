<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Counter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Task Counter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/activity') }}">Aktivitas</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <form class="m-3" action="{{url('/add_act')}}" method="post" class="col-lg-6 offset-lg-3 " enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Aktivitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="act" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Waktu</label>
            <input type="text" class="form-control" name="time" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rating</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value=1>
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value=2>
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value=3>
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value=4>
                <label class="form-check-label" for="inlineRadio2">4</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value=5>
                <label class="form-check-label" for="inlineRadio3">5</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
