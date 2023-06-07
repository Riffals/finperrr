@extends('layouts.mainlayout_4')
<style>
  /* poppins */
  @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,800,500,700");
  /* @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); */
  /* opensans */
  @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,500,700&display=swap');
  /* @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap'); */
  /* @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap'); */
</style>

@section('title', 'Bergabung_Sebagai(4)')

<div id="bunk" class="container-fluid">
  <div class="ling_1"></div>
</div>

@section('content')

{{-- <div id="ovfl">
<div id="ling_1"></div>
</div> --}}
  
  <h1 id="hl">Bergabung sebagai ?</h1>

  <br><br>

    <div id="flex_1" class="flex-container">
      <div class="gambar_mitra">
        <P></P>
        <form name="formulir" action="kirim.php" method="POST">
          <input type="image" src="{{ ('img/Sapu(Mitra).png') }}" alt="Sapu" width="70%" height="55%">
        </form>
        <!-- <img src="/Sapu(Mitra).png" alt=""> -->
        <P></P>
        <button type="button" class="btn btn-mg btn-custom">Mitra</button>
      </div>
      <div class="gambar_pelanggan">
        <p></p>
        <form name="formulir" action="kirim.php" method="POST">
          <input type="image" src="{{ ('img/Rumah(Pelanggan).png') }}" alt="Rumah" width="70%" height="55%">
        </form>
        <!-- <img src="/Rumah(Pelanggan).png" alt=""> -->
        <P></P>
        <button type="button" class="btn btn-mg btn-custom">Pelanggan</button>
      </div>
    </div>

    <br><br><br>

    <div class="flex_2" class="flex-container">
      <div class="biru" style="flex-grow: 1">
        <img src="{{ ('img/maid.png') }}" alt="Maid">
      </div>
      <div class="oren" style="flex-grow: 3">
        <p></p>
        <p class="tulisan_1"><strong style="color:#FFFFFF;font-weight:700">Mitra</strong> yang akan ditawarkan pada website kami harus jujur, disiplin, bertanggung jawab dengan pekerjaannya dan dapat dipercaya.</p>
        <br>
        <p class="tulisan_1">Segala hak <span style="color:#FFFFFF;font-weight:700">Mitra</span><span style="color:#135589;font-weight:700">PASTI DIJAMIN</span> oleh hukum yang berlaku di Indonesia</p>
      </div>
    </div> 

    <br><br><br>

    <div class="flex_2" class="flex-container">
      <div class="oren" style="flex-grow: 3 marg">
        <p></p>
        <p class="tulisan_2">Pada website ini <span style="color:#FFFFFF;font-weight:700">kenyamanan </span>dari pelanggan pasti tejamin. Ayo mulai cari Mitra yang cocok dengan kriteria mu!</p>
        <br>
        <p class="tulisan_2"><span style="color:#FFFFFF;font-weight:700">Jadilah pelanggan yang bijaksana </span>dalam mempekerjakan Mitra!</p>
      </div>
      <div class="biru" style="flex-grow: 1">
        <img src="{{ ('img/teacher.png') }}" alt="Maid">
      </div>
    </div> 
    
    <br><br><br>

    <style>
            #hl{
              margin-top: 1.2em;
              text-align: center;
              font-family: 'Poppins';
              font-weight: 700;
              font-size: 5em;
              color: #FFFF;
              position: relative;
              z-index: 2;
            }

          #bunk{
            /* harus absolute */
            position: absolute;
            overflow: hidden;
            width:  100%;
            height: 60%;
            /* background: yellowgreen; */
            z-index: 1;

          }

          .ling_1{
            /* position: absolute; */
            width:  150%;
            height: 250%;
            background: rgb(19, 85, 137, .92);
            border-radius:  45%;
            transform: translate(-16.5%, -60%);
          }

        /* #ovfl{
          background: red;
          overflow: hidden;
        } */

        /* #ling_1{
            width: 100%;
            height: 100%; */
            /* width: 2269px;  
            height: 1694px; */
            /* transform: translate(-20%, -80%); */
            /* left: 50%;
            right: 50%;
            transform: translate(-50%, -80%); */
            /* background-color: #E88A33; */
            /* background: rgb(19, 85, 137, .94 );
            border-radius: 100%;
            position: absolute;
            z-index: 1;
		    } */

         .btn-custom {
          font-family: 'open sans';
          font-weight: bold;
          width: 55%;
          border-radius: 40px ;
          color: #ffff; 
          background-color: rgb(19, 85, 137, .92);
          margin: auto auto auto; 
          /* border-color: #E51DF0;  */
          } 

          /* container */
          #flex_1 {
            display: flex;
            justify-content: center;
            /* background-color: DodgerBlue; */
            z-index: 2;
          }

          #flex_1 > div {
            background-color: #D9D9D9;
            border-radius: 40px;
            width: 15%;
            height: 21rem;
            /* height: 100%; */
            /* width: 330px;
            height: 400px; */
            margin: 50px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
            z-index: 2;
          }

          .flex_2 {
            display: flex;
            align-items: stretch;
            margin-left: 8%;
            margin-right: 8%;
            z-index: 2;
            /* background-color: #f1f1f1; */
          }

          .flex_2 > div {
            /* background-color: #135589; */
            color: white;
            /*  */
            margin: 0px 40px 0px 40px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
            border-radius: 40px;
            text-align: end;
            z-index: 2;
          }

          .biru{
            background-color: #135589;
          }

          .oren{
            background-color: rgb(232, 138, 51, .8);
          }
          
          .tulisan_1{
            color: #000;
            font-family: 'open sans';
            font-weight: 600;
            font-size: 44px;
            line-height: 1.2;
            text-align: start;
            margin-left: 5%;
            margin-right: 8%;
          }

          .tulisan_2{
            color: #000;
            font-family: 'open sans';
            font-weight: 600;
            /* font-size: 38px; */
            font-size: 44px;
            line-height: 1.2;
            text-align: end;
            margin-left: 6%;
            margin-right: 5%;
          }

    </style>

@endsection