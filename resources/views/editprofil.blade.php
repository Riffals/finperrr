@extends('layouts.main_guest_2')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

@section('title', 'edit_profil')

@section('content')
 {{-- <h1>edit_profil</h1> --}}
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

  {{-- <h1>buat_profil</h1> --}}
  <form action="/admin/pelanggan/profilpelanggan/edit" method="post" enctype="multipart/form-data">
         @csrf
             <div class="white-box">
                 <div class="row">
                     <h4 align="center">Edit Profil</h4>
                     {{-- alert error --}}
                     @if(count($errors) > 0)
                     <div class="alert alert-danger">
                         @foreach ($errors->all() as $error)
                         {{ $error }} <br />
                         @endforeach
                     </div>
                     @endif
                     <div class="col-md-6">
                         <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="background-color: rgba(217, 217, 217, 0.5);" width="255px" left="384px" top="404px">
                             <div class="form-group">
                                 {{-- <b>File Gambar</b><br />
                                 <input type="file" name="fotoprofil"> --}}
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="p-3 py-5">
                             {{-- <div class="mb-3">
                                 <label for="nama" class="from-label">akunID</label>
                                 <input type="number" class="form-control form-control-sm" name="akunid" id="akunid" value="2" readonly>
                             </div> --}}
                             <div class="mb-3">
                                 <label for="nama" class="from-label">Nama</label>
                                 <input type="text" class="form-control form-control-sm" name="nama" id="nama>
                             </div>
                             <div class="mb-3">
                                 <label for="lokasi" class="from-label">Lokasi</label>
                                 <input type="text" class="form-control form-control-sm" name="lokasi" id="lokasi">
                             </div>
                             {{-- nomer telp --}}
                             {{-- <div class="mb-3">
                                 <label for="nomorhp" class="from-label">Nomor HP</label>
                                 <input type="text" class="form-control form-control-sm" name="nomorhp" id="nomorhp">
                             </div> --}}
                             <div class="mb-3">
                                 <label for="nomorhp" class="form-label">Nomor HP</label>
                                 <input type="text" class="form-control form-control-sm" name="nomorhp" id="nomorhp">
                             </div>   
                             <script>
                                 document.getElementById('nomorhp').addEventListener('input', function(event) {
                                     this.value = this.value.replace(/[^0-9]/g, '');
                                 });
                             </script>                      
                             {{-- <div class="mb-3">
                                 <label for="email" class="from-label">Email</label>
                                 <input type="text" class="form-control form-control-sm" name="email" id="email">
                             </div> --}}
                          </div>
                      </div>
                 </div>
                 <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Simpan</button></div>
             </div>
     </form>
@endsection
