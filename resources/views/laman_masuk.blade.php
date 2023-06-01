@extends('layouts.mainlogin')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>

@section('title', 'LOGIN')

@section('content')

<body>
    {{-- <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img
              alt="ecommerce"
              class="lg:w-1/2 w-full object-cover object-center rounded"
              src="{{ 'img/logo.jpg' }}"
            />
            <div class="lg:w-1/2 w-full shadow-2xl lg:py-6 mt-6 lg:mt-0">
              <div class="w-full px-6 py-8 md:px-8">
                <h1 class="text-gray-900 text-3xl text-center title-font font-bold mb-8">Masuk ke Akun</h1>

                <form class="mb-4">

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="repeat_password" id="floating_repeat_password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_repeat_password"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="floating_first_name" id="floating_first_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <div class="flex items-start mb-6">

                        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> <a
                                href="#" class="text-blue-600 hover:underline dark:text-blue-500">Lupa kata
                                sandi?</a></label>
                    </div>



                    <button type="submit"
                        class="text-white bg-[#891321] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-full text-xl w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

  <body>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded" src="{{ 'img/logo.jpg' }}">
            <div class="lg:w-1/2 w-full shadow-2xl lg:py-6 mt-6 lg:mt-0">
              <div class="w-full px-6 py-8 md:px-8">
                <h1 class="text-gray-900 text-3xl text-center title-font font-bold mb-8">Masuk ke Akun</h1>

                <form class="mb-4">

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="repeat_password" id="floating_repeat_password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_repeat_password"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="floating_first_name" id="floating_first_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-sm text-red-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <div class="flex items-start mb-6">

                        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Tidak memiliki akun? <a
                                href="#" class="text-blue-600 hover:underline dark:text-blue-500">Daftar
                            </a></label>
                    </div>
                    <button type="submit"
                        class="text-white bg-[#891321] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-full text-xl w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>

</body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

@endsection


