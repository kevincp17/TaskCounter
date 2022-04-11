<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Counter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab2913ae0d.js" crossorigin="anonymous"></script></head>

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
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}"><i class="fa-solid fa-house-chimney"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/activity') }}"><i class="fa-solid fa-list"></i>Activity</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

<div class="table-responsive m-3 text-center">
    <h1>{{ Session::get('quote') }}</h1>
    <h1>Total Point: {{ Session::get('point') }}</h1>
    <br>
    <table class="table table-bordered table-striped table-hover table-sm bg-light">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Activity</th>
            <th scope="col">Activity Type</th>
            <th scope="col">Time(Minute)</th>
{{--            <th scope="col">Rating</th>--}}
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @if($acts->count()>0)
            @foreach($acts as $data)
                <tr>
                    <td>{{ $data->activity }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->time }}</td>
{{--                    <td>{{ $data->rating }}</td>--}}
                    <td>{{ date('d F Y', strtotime($data->date)) }}</td>
                </tr>
            @endforeach
        @elseif($acts->count()==0)
            <tr>
                <td colspan="7"><h3 class="text-center text-danger">No Activity Data Found</h3></td>
            </tr>
        @endif
        </tbody>
    </table>
</div>

{{ $acts->links() }}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
