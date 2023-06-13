@extends('layouts.main_guest')

@section('title', 'LOGIN(4)')

@section('content')
    {{-- Yodi --}}
    <div class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-[#E88A33] text-sm py-8">
    </div>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-3/5 mx-auto flex flex-wrap">
            <img
              alt="ecommerce"
              class="lg:w-1/2 w-full object-cover object-center"
              src="img/Logo(1).png"
            />
            <div class="lg:w-1/2 w-full shadow-2xl lg:py-6 mt-6 lg:mt-0 rounded-xl">
              <div class="w-full px-6 py-8 md:px-8 rounded">
                <h1 id="judul" class="text-gray-900 text-3xl text-center title-font font-bold mb-8">Masuk ke Akun</h1>
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
                {{-- untuk error --}}
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
                {{-- untuk berhasil --}}
                @if (session('Success'))
                    <div class="bg-green-500 text-white px-4 py-2 rounded-md">
                        {{ session('Success') }}
                    </div>
                @endif
                {{-- sampai sini --}}
                    <form class="mb-4" action="" method="POST">
                    @csrf
                    <div class="relative z-0 w-full mb-6 group">
                        {{-- value="{{ old('email') }}", kalau mau session sebelumnya nyimpen inputan email --}}
                        <input type="email" name="email" id="email value="{{ old('email') }}""
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="password" id="password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "/>
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <div class="flex items-start justify-between mb-6">
                        <label id="daftar" for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Tidak memiliki akun? <a
                                id="d700" href="/register" class="text-blue-600 hover:underline dark:text-blue-500">Daftar</a></label>
                        <a id="reset" href="/reset-password" class="text-blue-600 hover:underline dark:text-blue-500">Reset Password</a>
                    </div>
                    
                    
                    <button id="tombol" type="submit"
                        class="text-white bg-[#891321] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-full text-xl w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                </form>               
              </div>  
            </div>
          </div>
        </div>
      </section>

    <div id="bawah">
        <div
            class="container flex flex-col items-center justify-between p-6 mx-auto space-y-4 sm:space-y-6 sm:flex-row">
        </div>
    </div>
    {{-- yodi --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
    {{-- Responsive --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    /* poppins */
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,800,500,700");
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); */
    /* opensans */
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,500,700&display=swap');
    /* @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap'); */
    /* @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap'); */
    #judul{
        font-family: 'poppins';
    }
    #email{
        font-family: 'poppins';
    }
    #daftar{
        font-family: 'poppins';
        font-weight: 400;
    }
    #reset{
        font-family: 'poppins';
        font-weight: 400;
    }
    #d700{
        font-weight: 700;
    }
    #tombol{
        font-family: 'Open Sans';
        font-weight: 700;
    }
    #bawah{
        background-color: #E88A33;
        margin-top: 7%;
        padding: 6px;
    }

    </style>

@endsection