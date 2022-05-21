<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purnea Bazaar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Purnea Bazar</a>
            <form action="" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control border-0 rounded-0" size="60" placeholder="Seacrh here Product">
                <input type="submit" name="find" class="btn  bg-white border-0 rounded-0"  value="Go">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Signup</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ route('cart') }}" class="nav-link">Cart <span class="badge bg-danger text-white">{{get_cart_count()}}</span></a></li>
            </ul>
        </div>
    </nav>
    @section('content')
        
        @show
</body>
</html>