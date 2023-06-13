@extends('layouts.main_guest_2')

@section('title', 'index_profil')

@section('isinya')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
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

        .white-box {
            background-color: white;
            position: absolute;
            width: 1170px;
            height: 550px;
            left: 15%;
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
        }
    </style>

</head>
    <form action="" method="get">
        @csrf
        <div class="white-box">
            <div class="row">
                <h4 align="center">Profil Anda</h4>
                <div class="col-md-6">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="background-color: rgba(217, 217, 217, 0.5);" width="255px" left="384px" top="404px"><img class="rounded-circle mt-5" width="150px" src="{{ ('/img/Rectangle (1).png') }}">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 py-5">

                    </div>
                </div>
                <div class="mt-5 text-center"><a href="/admin/pelanggan/profil/buat" type="button" class="btn btn-primary profile-button">Buat Profil</a>
                    <span class="ml-5 text-center"><a href="/admin/pelanggan/profilpelanggan" type="button" class="btn btn-primary profile-button">Edit Profil</a></div>
                    </span>
                </div>

                </div>

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