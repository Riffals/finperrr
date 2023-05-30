@extends('layouts.mainlayout_3')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

@section('title', 'Dashboard_Mitra')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width:315px; background-color:#E88A33; border-radius:20px;align-items: center;text-align:center; margin-left:230px; margin-top:150px">
                <div class="card-body">
                    <img src="images/icon-formulir.png" style="width:13%; margin-top: 15px;margin-bottom:15px">

                    <p class="card-title" style="color: green; font-size:20px"><b>Tawaran Kontrak</b></p>

                    <div class="card" style="color:#b6b4b4; height:50px; width:230px;  margin-top:15px; margin-bottom:15px; border-radius:60px">
                        <a href="/tawarankontrak">
                            <button type="button" class="btn btn-primary btn-sm" style="background-color:#135589; border-radius:100px; width:80px; height:40px;margin-left:135px; margin-top:5px ">detail</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width:315px; background-color:#135589; border-radius:20px;align-items: center;text-align:center; margin:100px; margin-top:150px; margin-left:70px">
                <div class="card-body">
                    <img src="images/icon-formulir-checklist.png" style="width:17%; margin-top: 15px;margin-bottom:15px">

                    <p class="card-title" style="color: white; font-size:20px"><b>Kontrak Anda</b></p>

                    <div class="card card-light" style="color:#D9D9D9; height:50px; width:230px;  margin-top:15px; margin-bottom:15px; border-radius:60px">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/icon-pp-pelanggan.png" style="width:50px; margin-bottom:5px" alt="Profile">
                            </div>
                            <div class="col-sm-10">
                                <h5 style="font-size:15px; font-color:rgb(1, 1, 1); margin-top:15px">Arif Samsuddin</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

@endsection
