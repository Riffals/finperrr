<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    {{-- nav --}}
    <form action=" " method="post">
        @csrf

        <body className='snippet-body'>
            <nav class="navbar navbar-inverse">
                <div class="navbar-logo">
                    <a href="/login">
                        <img src="{{ ('img/logo_finper.png') }}" alt="Logo">
                    </a>
                </div>
            </nav>
    </form>

    {{-- <div class="container"> --}}
        @yield('content')
    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    {{-- Responsive --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<style>
    .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #135589;
            color: #fff;
            position: relative;
            z-index: 2;
        }

        .navbar-logo {
            margin-right: auto;
        }

        .navbar-logo img {
            height: 40px;
        }

        .navbar-inverse{
        background-color:  #135589;
        box-shadow:0px 5px 5px rgb(0, 0, 0, .55);
        /* position: relative; */
        z-index: 2;
    }
    </style>
</html>