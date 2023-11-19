<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airhub - Makes You FLY</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <ul>
            <li class="left"><img src="{{ asset('resources-img/LOGO.png') }}" alt=""></li>
            <li><a href="/getbackprofile">Profile</a></li>
            <li><a class="active" href="">Dashboard</a></li>
        </ul>
    </div>
    <div class="inside">
        <h1>List of Ticket or Booking(s)</h1>
        <br><br><br>
        @foreach ($data as $item)
            <div class="row">
                <div class="column">
                    <div class="card">
                        <h3>{{$item->depart}} - {{$item->arrival}}</h3>
                        <p><span class="material-symbols-outlined">airplane_ticket</span>Detail List ID : {{$item->planecode}} - ID{{$item->listid}}</p>
                        <p><span class="material-symbols-outlined">flight_takeoff</span> Depature Time : {{$item->datedepart}}</p>
                        <p><span class="material-symbols-outlined">flight_land</span> Arrival Time : {{$item->datearrival}}</p>
                        <p><span class="material-symbols-outlined">airplane_ticket</span> Gate : {{$item->gate}}</p>
                        <p>Alergic Food : {{$item->optionalfood}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</body>
</html>