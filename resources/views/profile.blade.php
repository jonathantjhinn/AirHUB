<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airhub - Makes You FLY</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    @foreach ($data as $item)
        <div class="header">
            <ul>
                <li class="left"><img src="{{ asset('resources-img/LOGO.png') }}" alt=""></li>
                <li><a href="/logout">Logout</a></li>
                <li><a class="active" href="">Profile</a></li>
                <li><a href="/booking">Booking</a></li>
                <li><a href="/dashboard/{{$item->email}}">Dashboard</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="photo">
                <img src="{{ asset('resources-img/user-1.jpg') }}" alt="">
            </div>
            <div class="photo">
                
                    <form action="/profile/{{$item->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="">Full Name</label><br>
                        <input type="text" id="name" name="name" value="{{$item->name}}"><br><br>
                        <label for="">Email</label><br>
                        <input type="email" id="email" name="email" value="{{$item->email}}" disabled><br><br>
                        <label for="fname">Password</label><br>
                        <input type="password" id="password" name="password" value="{{$item->password}}" disabled><br><br>
                        <label for="fname">Phone Number</label><br>
                        <input type="text" id="phone" name="phone" value="{{$item->phone}}"><br><br>
                        <label for="fname">Address</label><br>
                        <input type="text" id="address" name="address" value="{{$item->address}}"><br><br>
                        <button>
                            <span class="material-symbols-outlined">edit</span>Update
                        </button>
                    </form>
                
            </div>
        </div>
    @endforeach
</body>
</html>