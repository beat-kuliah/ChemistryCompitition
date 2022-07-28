@extends('layouts.app')

@section('content')

<div class="container top">
    <div class="container" id="header-body-cc">
        <div class="float-start" id="img-bottle">
            <img src="images/CC/alpukat-botol-minum.png" class="rounded img-fluid" alt="...">
        </div>
        <div class="float-end" id="img-maskot">
            <img src="images/CC/supri-1.png" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <h1 class="fw-bold"> Chemistry Fair UI 2022 </h1>
    <div class="container">
        <div class="row">
            {{-- <div class="col-ms-12"> --}}
            <div class="row col-ms-2">
                <div class="col-md-1">

                </div>
                <div class="col-md-7">
                    <h3>Ajang olimpiade kimia untuk siswa<br>SMA/MA/SMK/dan sederajat</h3>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <center>
                <div class="col-md-10" id="response">
                    <div class="mid-header" id="mv-btn">
                        <a class="btn btn-outline-dark" id="button" href="">Daftar</a>
                        <a class="btn btn-outline-dark" id="button" href="#cc">Tentang CC</a>
                    </div>
                </div>
            </center>
            <div class="col-ms-2">

            </div>
            {{-- </div> --}}
        </div>
    </div>

    <div class="container top" id="cc">
        <h2>Olimpiade Kimia tertua dan terbesar di Indonesia.</h2>
        <h2>Kini dilaksanakan secara daring.</h2>

        <p>Setelah 11 tahun hadir di Indonesia sebagai ajang olimpiade kimia, <br>Chemistry Competition kini dilaksanakan secara daring teruntuk para anak bangsa. <br>Tak ada lagi batasan lokasi. Inilah saatnya untuk menguji pengetahuanmu di bidang kimia. <br>Daftarkan tim-mu sekarang.</p>
    </div>

    <div class="container top">
        <h2>Hadiah Pemenang</h2>

        <div class="row">
            <div class="col-md-2">
                <p>Juara 1 :</p>
            </div>
            <div class="col-md-10">
                <p>Golden Ticket Kimia UI, Rp7.000.000, piala bergilir, piala tetap CF, sertifikat</p>
            </div>
            <div class="col-md-2">
                <p>Juara 2 :</p>
            </div>
            <div class="col-md-10">
                <p>Rp6.000.000, piala tetap CF, sertifikat</p>
            </div>
            <div class="col-md-2">
                <p>Juara 3 :</p>
            </div>
            <div class="col-md-10">
                <p>Rp5.000.000, piala tetap CF, sertifikat</p>
            </div>
            <div class="col-md-2">
                <p>Juara Regional :</p>
            </div>
            <div class="col-md-10">
                <p>Rp1.500.000, medali CF, sertifikat</p>
            </div>
        </div>
    </div>

    <div class="container top">
        <h2>Lini masa</h2>
        <br>
        <div class="row">
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[0]->name }}</h5>
                        <p class="card-text" style="height: 75px">Gelombang 1 : <br>
                            {{ $lini_masa[0]->gel_1_1 }} -<br>
                            {{ $lini_masa[0]->gel_1_2 }}</p>
                        <p class="card-text" style="height: 75px">Gelombang 2 : <br>
                            {{ $lini_masa[0]->gel_2_1 }} <br>
                            {{ $lini_masa[0]->gel_2_2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[1]->name }}</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[1]->tm_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[2]->name }}</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[2]->pre }}</p>
                        <h5 class="card-title" style="height: 25px">Pengumuman</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[2]->p_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[3]->name }}</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[3]->tm_2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[4]->name }}</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[4]->qf }}</p>
                        <h5 class="card-title" style="height: 25px">Pengumuman</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[4]->p_2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">{{ $lini_masa[5]->name }}</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[5]->sgf }}</p>
                        <h5 class="card-title" style="height: 25px">Pengumuman</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[5]->p_3 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <center>
            <button type="button" class="btn btn-outline-dark" id="button" onclick="download('dd')">Unduh Buku Panduan</button>
        </center>
    </div>

    <style>
        body {
            background-image: url('images/CC/bg-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    @endsection