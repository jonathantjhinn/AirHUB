<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airhub - Makes You FLY</title>
    <link href="{{ asset('css/booking-detail.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <ul>
            <li class="left"><img src="{{ asset('resources-img/LOGO.png') }}" alt=""></li>
            <li><a href="/logout">Logout</a></li>
            <li><a class="active" href="">Booking</a></li>
        </ul>
    </div>
    @foreach ($data as $item)
        <form action="/booking-detail/{{$item->listid}}" method="post">
            @csrf
            <div class="inside">
                <h2>Input Passenger Details</h2><br><br>
                <label for="">Full Name</label><br>
                <input type="text" id="fullname" name="fullname" value=""><br><br>
                <label for="">Phone Number</label><br>
                <input type="text" id="phone" name="phone" value=""><br><br>
            </div>

            <div class="inside">
                <h2>Credit/Debit Card Payment</h2><br><br>
                <label for="">Credit/Debit Card Number</label><br>
                <input type="text" id="cardnumber" name="cardnumber" value=""><br><br>
                <label for="">CVV/CVN</label><br>
                <input type="text" id="" name="" value=""><br><br>
                <label for="fname">Name on Card</label><br>
                <input type="text" id="cardname" name="cardname" value=""><br><br>
            </div>

            <div class="inside">
                
                <h2>{{$item->depart}} - {{$item->arrival}} Flight</h2>
                <br><br>
                <div class="insideleft">
                    <h1>Rp. {{$item->price}} (inc. Tax)</h1>
                </div>
                <br><br>
                
                <label for="fname">Text Optional Allergic Food :</label><br>
                <input type="text" id="optionalfood" name="optionalfood" value=""><br><br><br><br>
                <input type="submit" value="Purchase">
            
            </div>
            
            <br><br><br>
        </form>    
    @endforeach
</body>
</html>