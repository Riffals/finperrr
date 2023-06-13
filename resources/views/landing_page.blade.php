<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    {{-- nav --}}
    {{-- <form action=" " method="post">
        @csrf --}}

        {{-- <body className='snippet-body'> --}}
            <nav class="navbar navbar-inverse">
                <div class="navbar-logo">
                    <a href="/">
                        <img src="{{ ('img/logo_finper.png') }}" alt="Logo">
                    </a>
                </div>
            </nav>
    {{-- </form> --}}

    {{-- Coding sini yod --}}
    {{-- kalau misal sudah masuk ke halaman login, kalau di klik logo di atas baliknya akan terus ke halaman login, kalau mau ke landing page, copas ini http://127.0.0.1:8000 --}}
    <div>
      <a href="/login">Bergabung</a>
    </div>

    <div
      class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
    >
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div
          class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
        >
          <img
            alt=""
            src="img/avatar1.jpg"
            class=" inset-0 h-full w-full object-cover"
          />
        </div>
  
        <div class="lg:py-24">
          <h2 class="text-3xl font-bold sm:text-4xl">Platform Penyedia Jasa</h2>
            <h2 class="text-3xl font-bold sm:text-4xl">Pekerja Rumah Tangga</h2>
                <h2 class="text-3xl font-bold sm:text-4xl">#1 Di Indonesia</h2>
        </div>
      </div>
    </div>
    <div>
            <div class="container p-4  mx-auto space-y-16 sm:p-10">
                <div class="flex flex-center justify-center w-full py-4 px-8 rounded-lg bg-white grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="space-y-4">

                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm " src="img/Gaji-removebg-preview.png">
                        <div class="flex flex-col items-center">
                            
                            <p class="text-sm dark:text-black">Berikan range  gaji  sesuai dengan yang kamu inginkan!</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm " src="img/tanggal (1).png">
                        <div class="flex flex-col items-center">
                            <p class="text-sm dark:text-black">Mencari seorang pekerja rumah tangga dengan spesifikasi  umur tertentu?</p> 
                        </div>
                    </div>
                    <div class="space-y-4">
                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm" src="img/search.png">
                        <div class="flex flex-col items-center">
                            <p class="text-sm dark:text-black">Filter berdasarkan lokasi  tempat tinggal Anda saat ini!</p>
                        </div>
                    </div> 
                </div>
            </div>
                <div class="container px-0 py-0 mx-auto">
                  <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img
                      alt="ecommerce"
                      class="lg:w-full w-full object-cover object-center rounded"
                      src="img/lg1.png"
                    />
                    </div>
                    <div class="container px-0 py-0 mx-auto">
                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                          <img
                            alt=""
                            class="lg:w-full w-full object-cover object-center rounded"
                            src="img/lg.png"
                          />
                          </div>
                    
        </section>
      </div>
   
    <div class="bg-[#E88A33]">
        <div
            class="container flex flex-col items-center justify-between p-6 mx-auto space-y-4 sm:space-y-0 sm:flex-row">

        </div>
    </div>
    </div>
     </div>
      </section>
</div>

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