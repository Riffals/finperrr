@extends('layouts.mainlayout_3')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

@section('title', 'Dashboard_Pelanggan(3)')

@section('content')

    {{-- Searbar + filter --}}
    <form action="" method="GET">  
    <div class="flex w-2/5 mx-8 my-10">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Gaji<svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        {{-- dropdown --}}
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
                <button type="submit" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" name='desc'>Tertinggi</button>
            </li>
            <li>
                <button type="submit" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" name="asc">Terendah</button>
            </li>
            </ul>
        </div>
        {{-- search --}}
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" name="keyword" placeholder="Pencarian Lokasi Mitra" value="{{ old('cari') }}">
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="cari">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>

    {{-- Yodi --}}
    {{-- card_1 --}}
    <div class="grid grid-cols-6 gap-4 p-8">
        {{-- isi 1 --}}
        @foreach ($pelangganList as $cust)
        {{-- {{ $cust->gambar }} --}}
        <div class="max-w-xs flex flex-col items-center justify-center gap-8 rounded-3xl shadow-2xl p-4 py-8 bg-white">
            {{-- <img src="{{ ('img/mitra_1.png') }}" alt="" class="object-cover object-center w-36 rounded-full "> --}}
                {{-- tampilin gambar --}}
                @if ($cust->gambar != '')
                    <img src="{{ asset('img/'.$cust->gambar.'.png') }}" alt="00100" class= "object-cover object-center w-36 rounded-full">
                @else
                    <img src="{{ asset('foto-profil-gabut.jpg') }}" alt="00200" class= "object-cover object-center w-36 rounded-full">
                @endif
            <h2 class="text-2xl font-semibold tracking-wide">{{ $cust->nama_mitra }}</h2>
            <div class="p-2 bg-gray-200 rounded-md">
                <div class="flex items-center justify-between gap-2">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.54811 8.12771L5 8.60631L4.45189 8.12771C2.49421 6.4183 1.5 4.90561 1.5 3.5C1.5 1.51071 3.05175 0 5 0C6.94825 0 8.5 1.51071 8.5 3.5C8.5 4.90561 7.50579 6.4183 5.54811 8.12771ZM1.84278 6.4017C2.04807 6.68278 2.27676 6.96867 2.52874 7.25948C1.59763 7.46921 1 7.76684 1 8C1 8.40348 2.78957 9 5 9C7.21043 9 9 8.40348 9 8C9 7.76684 8.40238 7.46921 7.47126 7.25948C7.72324 6.96867 7.95193 6.68278 8.15722 6.4017C9.28163 6.7429 10 7.29019 10 8C10 9.25338 7.76013 10 5 10C2.23987 10 0 9.25338 0 8C0 7.29019 0.718369 6.7429 1.84278 6.4017ZM5 1C6.40188 1 7.5 2.06908 7.5 3.5C7.5 4.52348 6.68634 5.78295 5 7.27801C3.31366 5.78295 2.5 4.52348 2.5 3.5C2.5 2.06908 3.59812 1 5 1ZM5 2C5.82843 2 6.5 2.67157 6.5 3.5C6.5 4.32843 5.82843 5 5 5C4.17157 5 3.5 4.32843 3.5 3.5C3.5 2.67157 4.17157 2 5 2ZM4.5 3.5C4.5 3.22386 4.72386 3 5 3C5.27614 3 5.5 3.22386 5.5 3.5C5.5 3.77614 5.27614 4 5 4C4.72386 4 4.5 3.77614 4.5 3.5Z"
                            fill="black" />
                    </svg>
                    <div class="text-center">
                        <div class="mb-1 text-xs"> {{ $cust->lokasi_mitra }}</div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <svg class="text-red-300===" width="10" height="10" viewBox="0 0 10 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 6.33281V7C0 7.55156 1.34375 8 3 8C4.65625 8 6 7.55156 6 7V6.33281C5.35469 6.7875 4.175 7 3 7C1.825 7 0.645312 6.7875 0 6.33281ZM5 2C6.65625 2 8 1.55156 8 1C8 0.448438 6.65625 0 5 0C3.34375 0 2 0.448438 2 1C2 1.55156 3.34375 2 5 2ZM0 4.69375V5.5C0 6.05156 1.34375 6.5 3 6.5C4.65625 6.5 6 6.05156 6 5.5V4.69375C5.35469 5.225 4.17344 5.5 3 5.5C1.82656 5.5 0.645312 5.225 0 4.69375ZM6.5 4.86562C7.39531 4.69219 8 4.37031 8 4V3.33281C7.6375 3.58906 7.10469 3.76406 6.5 3.87188V4.86562ZM3 2.5C1.34375 2.5 0 3.05938 0 3.75C0 4.44063 1.34375 5 3 5C4.65625 5 6 4.44063 6 3.75C6 3.05938 4.65625 2.5 3 2.5ZM6.42656 3.37969C7.36406 3.21094 8 2.87969 8 2.5V1.83281C7.44531 2.225 6.49219 2.43594 5.48906 2.48594C5.95 2.70938 6.28906 3.00938 6.42656 3.37969Z"
                            fill="black" />
                    </svg>
                    <div class="text-center">
                        <div class="mb-1 text-xs"> Rp. {{ $cust->gaji }}</div>
                    </div>
                </div>
            </div>
            <button type="button"
                class="rounded-3xl flex items-center justify-center gap-4 px-4 py-2 bg-sky-800 text-gray-100">
                Selengkapnya
                <svg width="16" height="18" viewBox="-1 -1 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.27614 5.69775L10.4922 5.69775" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M5.88416 1.22464L10.4922 5.69801L5.88416 10.1714" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        @endforeach
    </div>

    <div class="my-5">
        {{-- {{ $pelangganList->links()->appends(['keyword' => $keyword, 'desc' => $desc, 'asc' => $asc]) }} --}}
        {{ $pelangganList->appends($_GET)->links() }}
      </div>


    {{-- card_2 --}}

    {{-- yodi --}}

    {{-- <style>
        #searcfil {
            margin: 3% 0% 0% 5%;
            width: 30%;
        }

    </style> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

@endsection
