
<!doctype html>
<html>

<head>
@section('isinya')
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background: #7dacd2
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

        /* .white-box {
            background-color: white;
            position: absolute;
            width: 1170px;
            height: 550px;
            left: 127px;
            top: 224px;

            border-radius: 20px;
        }

        .image_upload>input {
            display: none;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: #135589;
            box-shadow: none;
            border: none
        }



        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        } */
    </style>

</head>
<form action="{{url('profil/store')}}" method="post">
                            @csrf

    <body className='snippet-body'>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="{{ ('img/logo_finper.png') }}" alt="Logo">
            </div>
            <div class="navbar-icon">
                <img src="{{ ('img/icon _bell_.png') }}" alt="Notification">
                <img src="{{ ('img/Rectangle (1).png') }}" alt="Profile">
            </div>
        </nav>

        {{-- <div class="white-box">
            <div class="row">
                <h4 align="center">Profil Anda</h4>
                <div class="col-md-6">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="background-color: rgba(217, 217, 217, 0.5);" width="255px" left="384px" top="404px"><img class="rounded-circle mt-5" width="150px" src="Rectangle (1).png">
                        <p class="image_upload">
                            <label for="userImage">
                                <a class="btn" rel="nofollow" style="background-color: rgba(19, 85, 137, 0.33); border-radius: 20px;"><span class='glyphicon glyphicon-paperclip'></span> Pilih Foto</a>
                            </label>
                            <input type="file" name="userImage" id="userImage">
                        </p>
                    </div>
                </div> --}}
                {{-- <div class="col-md-6">
                    <div class="p-3 py-5">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Lokasi
                                    </th>
                                    <th>Nomor HP
                                    </th>
                                    <th>Email
                                    </th>

                                </tr>
                            </thead> --}}
                            {{-- @foreach ($pegawai as $p)
                            <tbody>
                                <tr>
                                    
                                    <td>{{ $p->nama_pelanggan }}</td>
                                    <td>{{ $p->lokasi_pelanggan }}</td>
                                    <td>{{ $p->nomorHP_pelanggan }}</td>
                                    <td>{{ $p->email_pelanggan }}</td>

                                </tr>
                            </tbody>
                            @endforeach --}}
                        {{-- </table> --}}


                    {{-- </div>
                </div> --}}
                {{-- <div class="mt-5 text-center"><a href="/profil/buat" type="button" class="btn btn-primary profile-button">Buat Profil</a></div>

            </div> --}}
        </div>
</form>
</div>
</div>
</div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript'>
    src = '#'
</script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
        e.preventDefault();
    });
</script>

</body>

</html>