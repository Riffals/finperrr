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
    {{-- <form action="{{url('profil/store')}}" method="post">
    @csrf --}}
    {{-- <body className='snippet-body'> --}}
        <nav class="navbar navbar-inverse">
        <div class="navbar-logo">
            <a href="/">
                <img src="{{ ('/img/logo_finper.png') }}" alt="Logo">
            </a>
        </div>
        <div class="navbar-icon">
        {{-- <img src="{{ ('img/icon _bell_.png') }}" alt="Notification"> --}}
        <img src="{{ ('/img/Rectangle (1).png') }}" alt="Profile" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="{{ ('/img/Rectangle (1).png') }}" alt="img_user">
                        <h3>James Aldrino</h3>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="{{ ('/img/kontrak_mitra.png') }}" alt="Kontrak_mitra">
                        <p>Kontrak Mitra</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="{{ ('/img/edit_profil.png') }}" alt="Edit_profil">
                        <p>Edit Profil</p>
                        <span>></span>
                    </a>
                    <a href="/logout" class="sub-menu-link">
                        <img src="{{ ('/img/logout.png') }}" alt="Logout">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </div>
        </nav>
    {{-- </form> --}}

    {{-- <div class="container"> --}}
        @yield('content')
    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    {{-- Responsive --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- untuk menu onclick --}}
    <script>
        let subMenu = document.getElementById("subMenu");
        
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

<style>
        /* poppins */
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,800,500,700");
        body {
            background: rgb(230, 230, 230, .9)
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #135589;
            color: #fff;
        }

        .navbar-logo {
            margin-right: auto;
        }

        .navbar-logo img {
            height: 40px;
        }

        .navbar-icon {
            display: flex;
            align-items: center;
        }

        .navbar-icon img {
            height: 25px;
            margin: 0 10px;
            cursor: pointer;
        }

        .navbar-inverse{
        background-color:  #135589;
        box-shadow:0px 5px 5px rgb(0, 0, 0, .55);
        /* position: relative; */
        z-index: 2;
        }
        .sub-menu-wrap{
            font-family: 'Poppins';
            color: black;
            position: absolute;
            top: 100%;
            right: 0%;
            width: 15%;
            max-height: 0px;
            overflow: hidden;
            transition: max-height 0.5s;
        }
        .sub-menu-wrap.open-menu{
            max-height: 400px;
        }
        .sub-menu{
            background: #fff;
            padding: 20px;
            margin: 10px;
        }
        .user-info{
            display: flex;
            align-items: center;
        }
        .user-info h3{
            font-weight: 500;
        }
        .user-info img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .sub-menu hr{
            border: 0;
            height: 3px;
            width: 100%;
            color: black;
            /* background: #000; */
            margin: 15px 0 10px;
        }
        .sub-menu-link{
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #525252;
            margin: 12px 0;
        }
        .sub-menu-link p{
            width: 100%;
        }
        .sub-menu-link img{
            width: 40px;
            height: 40px;
            background: #e5e5e5;
            border-radius: 40%;
            padding: 8px;
            margin-right: 15px;
        }
        .sub-menu-link span{
            font-size: 20px;
            transition: transform 0.5s;
        }
        .sub-menu-link:hover span{
            transform: translate(5px);
        }
        .sub-menu-link:hover p{
            font-weight: 600;
        }


</style>
</html>