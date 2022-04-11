<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Counter</title>
    <style>
        #center {
            position: absolute;
            left: 50%;
            top: 65%;
            transform: translate(-50%, -50%);
            border: 5px solid #FFFF00;
            padding: 10px;
        }

        .list {
            max-width: 550px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.4;
        }

        h1 {
            text-align: center;
        }

        ul li.marker::marker {
            content: "\2714\0020  ";
            color: #4ac1bb;
            font-size: 1.5em;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab2913ae0d.js" crossorigin="anonymous"></script></head>
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
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}"><i class="fa-solid fa-house-chimney"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/activity') }}"><i class="fa-solid fa-list"></i>Activity</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="list">
        <h1>What Task Counter Can Do</h1>
        <ul>
            <li class="marker">
                <strong>Put any activities you want</strong>
            </li>
            <li class="marker">
                <strong>Get a point based on your activities, time and performance</strong>
            </li>
            <li class="marker">
                <strong>Motivates you to be more productive</strong>
            </li>
        </ul>
    </div>

<div id="center" class="p-3 border m-2 bg-light rounded">
    <form class="m-3" action="{{url('/add_act')}}" method="post" class="col-lg-6 offset-lg-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" class="form-control" name="act" placeholder="Activity Name">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Activity Type</label>
            <select class="form-select" id="inputGroupSelect01" name="actType">
                <option selected>Type of Activity</option>
                <option value="Art">Art</option>
                <option value="Career">Career</option>
                <option value="Sport & Health">Sport & Health</option>
                <option value="Cooking">Cooking</option>
                <option value="Hobby">Hobby</option>
                <option value="House Chore">House Chore</option>
                <option value="Social">Social</option>
                <option value="Reading & Learning">Reading & Learning</option>
                <option value="Traveling">Travelling</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="time" placeholder="Time(Minute)">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><b>How do you feel about this activity?</b></label>
        </div>

        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" value=1>
                <i class="fa-regular fa-face-angry fa-2xl"></i>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" value=2>
                <i class="fa-regular fa-face-frown fa-2xl"></i>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" value=3>
                <i class="fa-regular fa-face-meh fa-2xl"></i>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" value=4>
                <i class="fa-regular fa-face-smile fa-2xl"></i>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" value=5>
                <i class="fa-regular fa-face-laugh-beam fa-2xl"></i>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i>Add Activity</button>
        </div>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
