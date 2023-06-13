@extends('partials.master')
@section('content')
    <a href="{{ url('/admin/pelanggan/dashpel') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
    <nav class="mt-3">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            @if ($data)
                @if ($data->statusKontrak == 1)
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Detail Mitra</button>
                @endif
            @else
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Detail Mitra</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pembayaran</button>
            @endif

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        @if ($data)
            @if ($data->statusKontrak == 1)
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="{{ route('mitra.kontrak', $id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container p-5">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning">Abdul G</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row p-3">
                                                <div class="col p-3" style="background-color: #135589;border-radius:15px">
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset('img/profile.png') }}" width="200"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-2">
                                                        <span class="text-center fs-3 text-light">{{ $mitra->lokasi_mitra }}</span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <h4 class="text-bold">Durasi Kerja</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <button type="button" class="btn btn-primary">Mulai</button><br>
                                                            <span>{{ $data->mulai ?? '' }}</span>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-primary">Berakhir</button><br>
                                                            <span>{{ $data->berakhir ?? '' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <h4 class="text-bold">Jam Kerja</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <input type="text" class="form-control" value="{{ $data->jamKerja ?? '' }}" name="jam_kerja"
                                                                id="" readonly>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-primary">Jam /
                                                                Hari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <h4 class="text-bold">Catatan Khusus</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <input type="text" placeholder="tulis catatan"
                                                                class="form-control" readonly value="{{ $data->catatanKhusus ?? '' }}" name="catatan" id="">
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-lg">Hubungi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button" class="btn btn-primary btn-lg">{{ $data->nomorHP_mitra ?? '' }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        {{-- <button type="button" id="pesan" class="btn btn-primary btn-lg">Pesan
                                            Sekarang</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container p-5">
                        <div class="row mt-5">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row p-3">
                                            <div class="col">
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <h4 class="text-bold">Metode Pembayaran</h4>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class='col text-center'>
                                                                <input type="radio" name="pembayaran" id="img1"
                                                                    class="d-none imgbgchk" value="">
                                                                <label for="img1">
                                                                    <img class="image"
                                                                        src="https://dummyimage.com/600x400/000/fff"
                                                                        alt="Image 1">
                                                                    <div class="tick_container">
                                                                        <div class="tick"><i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class='col text-center'>
                                                                <input type="radio" name="pembayaran" id="img2"
                                                                    class="d-none imgbgchk" value="">
                                                                <label for="img2">
                                                                    <img class="image"
                                                                        src="https://dummyimage.com/600x400/000/fff"
                                                                        alt="Image 2">
                                                                    <div class="tick_container">
                                                                        <div class="tick"><i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class='col text-center'>
                                                                <input type="radio" name="pembayaran" id="img3"
                                                                    class="d-none imgbgchk" value="">
                                                                <label for="img3">
                                                                    <img class="image"
                                                                        src="https://dummyimage.com/600x400/000/fff"
                                                                        alt="Image 3">
                                                                    <div class="tick_container">
                                                                        <div class="tick"><i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class='col text-center'>
                                                                <input type="radio" name="pembayaran" id="img4"
                                                                    class="d-none imgbgchk" value="">
                                                                <label for="img4">
                                                                    <img class="image"
                                                                        src="https://dummyimage.com/600x400/000/fff"
                                                                        alt="Image 4">
                                                                    <div class="tick_container">
                                                                        <div class="tick"><i class="fa fa-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <h4 class="text-bold">Ringkasan Pembayaran</h4><br>
                                                        <table>
                                                            <tr>
                                                                <td>Total Tagihan</td>
                                                                <td>:</td>
                                                                <td>Rp 5.000.000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Biaya Layanan</td>
                                                                <td>:</td>
                                                                <td>Rp 250.000</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row p-3">
                                                            <div class="col">
                                                                <div class="">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-lg">Total
                                                                        Bayar</button><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-3">
                                                            <div class="col">
                                                                <div class="">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-lg">Rp
                                                                        5.250.000</button><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Bayar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($data->statusKontrak == 0)
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container p-5">
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        Pembayaran Sedang Diverifikasi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="{{ route('mitra.kontrak', $id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container p-5">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-warning">Abdul G</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row p-3">
                                            <div class="col p-3" style="background-color: #135589;border-radius:15px">
                                                <div class="d-flex justify-content-center">
                                                    <img src="{{ asset('img/profile.png') }}" width="200"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-center mt-2">
                                                    <span class="text-center fs-3 text-light">{{ $mitra->lokasi_mitra }}</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <h4 class="text-bold">Durasi Kerja</h4>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-primary">Mulai</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-primary">Berakhir</button>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <h4 class="text-bold">Jam Kerja</h4>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <input type="text" class="form-control" value=""
                                                            name="jam_kerja" id="">
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-primary">Jam / Hari</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <h4 class="text-bold">Catatan Khusus</h4>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <input type="text" placeholder="tulis catatan"
                                                            class="form-control" name="catatan" id="">
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" class="btn btn-primary btn-lg">SubTotal
                                                                Biaya</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-3">
                                                    <div class="col">
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" class="btn btn-primary btn-lg">Rp
                                                                {{ number_format($mitra->gaji,0,',','.') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <button type="button" id="pesan" class="btn btn-primary btn-lg">Pesan
                                        Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container p-5">
                    <div class="row mt-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row p-3">
                                        <div class="col">
                                            <div class="row p-3">
                                                <div class="col">
                                                    <h4 class="text-bold">Metode Pembayaran</h4>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class='col text-center'>
                                                            <input type="radio" name="pembayaran" id="img1"
                                                                class="d-none imgbgchk" value="">
                                                            <label for="img1">
                                                                <img class="image"
                                                                    src="https://dummyimage.com/600x400/000/fff"
                                                                    alt="Image 1">
                                                                <div class="tick_container">
                                                                    <div class="tick"><i class="fa fa-check"></i></div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class='col text-center'>
                                                            <input type="radio" name="pembayaran" id="img2"
                                                                class="d-none imgbgchk" value="">
                                                            <label for="img2">
                                                                <img class="image"
                                                                    src="https://dummyimage.com/600x400/000/fff"
                                                                    alt="Image 2">
                                                                <div class="tick_container">
                                                                    <div class="tick"><i class="fa fa-check"></i></div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class='col text-center'>
                                                            <input type="radio" name="pembayaran" id="img3"
                                                                class="d-none imgbgchk" value="">
                                                            <label for="img3">
                                                                <img class="image"
                                                                    src="https://dummyimage.com/600x400/000/fff"
                                                                    alt="Image 3">
                                                                <div class="tick_container">
                                                                    <div class="tick"><i class="fa fa-check"></i></div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class='col text-center'>
                                                            <input type="radio" name="pembayaran" id="img4"
                                                                class="d-none imgbgchk" value="">
                                                            <label for="img4">
                                                                <img class="image"
                                                                    src="https://dummyimage.com/600x400/000/fff"
                                                                    alt="Image 4">
                                                                <div class="tick_container">
                                                                    <div class="tick"><i class="fa fa-check"></i></div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="col">
                                                    <h4 class="text-bold">Ringkasan Pembayaran</h4><br>
                                                    <table>
                                                        <tr>
                                                            <td>Total Tagihan</td>
                                                            <td>:</td>
                                                            <td>Rp 5.000.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Biaya Layanan</td>
                                                            <td>:</td>
                                                            <td>Rp 250.000</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col">
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <div class="">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-lg">Total Bayar</button><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3">
                                                        <div class="col">
                                                            <div class="">
                                                                <button type="button" class="btn btn-primary btn-lg">Rp
                                                                    5.250.000</button><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Bayar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-warning">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-primary text-light">
                                <div class="card-body">
                                    Mohon selesaikan pembayaran anda sebelum tanggal 12 Februari 2023 23:59 WIB dengan
                                    rincian berikut
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            Transfer Bank
                                        </div>
                                        <div class="col text-end">
                                            BNI
                                        </div>
                                    </div>
                                    <hr>
                                    Nomor Rekening <br>
                                    800232335 <br>
                                    BNI PT. Findper (Pasar Senin)
                                    <div class="row">
                                        <div class="col text-end">
                                            <h5>Total Bayar</h5>
                                            <h5>Rp. 5.250.785</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <label for="">Upload Bukti Bayar</label>
                                    <input type="file" name="bukti" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">Upload</button>
                                <div class="px-3"></div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.getElementById("pesan").addEventListener("click", function() {
            // Remove the 'active' class from the 'nav-link' and 'tab-pane' elements
            document.getElementById("nav-home-tab").classList.remove("active");
            document.getElementById("nav-home").classList.remove("active");
            document.getElementById("nav-home").classList.remove("show");

            // Add the 'active' class to the 'nav-link' and 'tab-pane' elements
            document.getElementById("nav-profile-tab").classList.add("active");
            document.getElementById("nav-profile").classList.add("active");
            document.getElementById("nav-profile").classList.add("show");
        });
    </script>
@endpush

