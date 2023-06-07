<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    {{-- nav yodi--}}
    {{-- <nav class="px-4 py-5 mx-auto bg-[#10558A] sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex items-center justify-between">
            <div class="flex items-center">
                <a href="#">
                    <img class="w-auto h-20" src="img/Logo(1).png" alt="">
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" aria-label="Our product" title="Our product"
                            class="font-medium text-white tracking-wide transition-colors duration-200 hover:text-deep-purple-accent-400">Beranda</a>
                    </li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing"
                            class="font-medium text-white tracking-wide transition-colors duration-200 hover:text-deep-purple-accent-400">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li><a href="/" aria-label="Sign in" title="Sign in"
                        class="font-bold tracking-wide text-gray-700 bg-gray-200 py-2.5 px-3 rounded-lg transition-colors duration-200 hover:text-deep-purple-accent-400">Bergabung</a>
                </li>
            </ul>

            <!-- Mobile menu -->
            <div class="lg:hidden">
                <button aria-label="Open Menu" title="Open Menu"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                        </path>
                        <path fill="currentColor"
                            d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav> --}}

          {{-- nav --}}
          <form action="{{url('profil/store')}}" method="post">
            @csrf
            <body className='snippet-body'>
                <nav class="navbar navbar-inverse">
                    <div class="navbar-logo">
                    <img src="{{ ('img/logo_finper.png') }}" alt="Logo">
                    </div> 
                </nav>
        </form>
    {{--  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul> --}}
    </div>
    <section>
        <div
          class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
        >
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div
              class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
            >
              <img
                alt="Party"
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
      </section>
      <div>
        <section class="py-6  dark:bg-[#135589] dark:text-gray-100">
            <div class="container p-4  mx-auto space-y-16 sm:p-10">
                <div class="grid w-full grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="space-y-4">
                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm " src="img/Gaji-removebg-preview.png">
                        <div class="flex flex-col items-center">
                            
                            <p class="text-sm dark:text-gray-400">Berikan range  gaji  sesuai dengan yang kamu inginkan!</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm " src="img/tanggal (1).png">
                        <div class="flex flex-col items-center">
                            <p class="text-sm dark:text-gray-400">Mencari seorang pekerja rumah tangga dengan spesifikasi  umur tertentu?</p> 
                        </div>
                    </div>
                    <div class="space-y-4">
                        <img alt="" class="object-cover h-56 mx-auto mb-4 bg-center rounded-sm" src="img/search.png">
                        <div class="flex flex-col items-center">
                            <p class="text-sm dark:text-gray-400">Filter berdasarkan lokasi  tempat tinggal Anda saat ini!</p>
                        </div>
                    </div> 
                </div>
            </div>
                <div class="container px-0 py-0 mx-auto">
                  <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img
                      alt="ecommerce"
                      class="lg:w-full w-full object-cover object-center rounded"
                      src="img/fitur.png"
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
</body>



<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,800,500,700");

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
        /* box-shadow:0px 5px 5px rgb(0, 0, 0, .55); */
        /* position: relative; */
        z-index: 2;
    }
    .nav-item{
        font-family: poppins;
    }
    </style>

</html>