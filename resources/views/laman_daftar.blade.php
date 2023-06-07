<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 9 | REGISTER</title>

</head>

<body>
          {{-- nav --}}
          <form action=" " method="POST">
            @csrf
            <body className='snippet-body'>
                <nav class="navbar navbar-inverse">
                    <div class="navbar-logo">
                        <a href="/">
                            <img src="{{ ('img/logo_finper.png') }}" alt="Logo">
                        </a>
                    </div>
                </nav>
        </form>
    <div class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-[#E88A33] text-sm py-8">
    </div>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded" src="img/logo.jpg" />
                <div class="lg:w-1/2 w-full shadow-2xl lg:py-6 mt-6 lg:mt-0 rounded-2xl">
                    <div class="w-full px-6 py-8 md:px-8">
                        <h1 class="text-gray-900 text-3xl text-center title-font font-bold mb-8">Daftar</h1>
{{--  --}}
                        {{-- <form action="/create" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3 d-grid">
                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form> --}}
{{--  --}}
                        {{-- error --}}
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif 

                        <form class="mb-4" action="/register" method="POST">
                            @csrf
                            {{-- <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="nomertelp" id="nomertelp"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                                <label for="floating_repeat_password"
                                    class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-blue-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                            </div> --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="email" id="email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-blue-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="password" name="password" id="password"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="password"
                                    class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-blue-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                            </div>
                            {{-- buat dropdown yang pilih tipeAkun --}}
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="class" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Sebagai</label>
                                <select name="akunID" id="akunID" class="block w-full py-2.5 px-3 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                    <option value=" ">Select One</option>
                                    @foreach ($tipeAkun as $item)
                                        @if ($item->akunID == 2 || $item->akunID == 3)
                                            <option value="{{ $item->akunID }}">{{ $item->tipeAkun }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-start mb-6">
                                <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Saya Setuju Dengan<a href="#" class="text-blue-600 font-bold dark:text-blue-500 hover:underline ml-1">Syarat Dan Ketentuan</a>.</label>
                            </div>

                            <button type="submit"
                                class="text-white bg-[#891321] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-full text-xl w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="bg-[#E88A33]">
        <div
            class="container flex flex-col items-center justify-between p-6 mx-auto space-y-4 sm:space-y-0 sm:flex-row">

        </div>
    </div>
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
        /* box-shadow:0px 5px 5px rgb(0, 0, 0, .55); */
        /* position: relative; */
        z-index: 2;
    }
    </style>

</html>