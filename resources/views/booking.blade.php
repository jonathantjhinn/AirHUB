<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airhub - Makes You FLY</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <ul>
            <li class="left"><img src="resources-img/LOGO.png" alt=""></li>
            <li><a href="/getbackprofile">Profile</a></li>
            <li><a class="active" href="">Booking</a></li>
        </ul>
    </div>
    <div class="inside">
        <h1>List of Ticket or Booking(s)</h1>
        <form method="post" action="/filterview">
            @csrf
            <label for="type">Select Type:</label>
            <select name="type" id="type">
                <option value="business">Business</option>
                <option value="economy">Economy</option>
            </select>
            <button type="submit">Search</button>
            
            <br><br><br>
            @foreach ($data as $item)
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <h3>{{$item->depart}} - {{$item->arrival}} {{$item->class}}</h3>
                            <p><span class="material-symbols-outlined">flight_takeoff</span> Depature Time : {{$item->datedepart}}</p>
                            <p><span class="material-symbols-outlined">flight_land</span> Arrival Time : {{$item->datearrival}}</p>
                            <p><span class="material-symbols-outlined">airplane_ticket</span> Gate : {{$item->gate}}</p>
                            <p><a href="/booking-detail/{{$item->listid}}">Buy >></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </form>
    </div>
    
</body>
</html>