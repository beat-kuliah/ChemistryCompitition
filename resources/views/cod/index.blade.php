@extends('layouts.app')

@section('content')

<div class="container top">
    <div class="container" id="header-body-cc">
        <div class="float-start" id="img-bottle">
            <img src="images/CC/alpukat-botol-minum.png" class="rounded img-fluid" alt="...">
        </div>
        <div class="float-end" id="img-supri">
            <img src="images/COD/supri-1.png" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <h1 class="fw-bold"> Chemistry Open Debate </h1>
    <div class="container">
        <div class="row">
            {{-- <div class="col-ms-12"> --}}
            <div class="row col-ms-2">
                <div class="col-md-1">

                </div>
                <div class="col-md-7">
                    <h3>Kompetisi Debat Siswa SMA/MA/SMK dan sederajat</h3>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <center>
                <div class="col-md-10" id="response">
                    <div class="mid-header" id="mv-btn">
                        <a class="btn btn-outline-dark" id="button" href="">Daftar</a>
                        <a class="btn btn-outline-dark" id="button" href="#cod">Tentang COD</a>
                    </div>
                </div>
            </center>
            <div class="col-ms-2">

            </div>
            {{-- </div> --}}
        </div>
    </div>

    <div class="container top" id="cod">
        <h2>Tunjukkan Jiwa Kompetisi dan Pengetahuanmu pada ilmu Kimia</h2>

        <p>Dengan tema “The Controversy of Chemistry in Our Body”, siswa-siswi menyalurkan pendapat mereka mengenai Ilmu Kimia. Dengan berpatisipasi, kamu juga akan berkontribusi untuk meningkatkan jiwa kompetisi dan ketertarikan pelajar Indonesia pada ilmu kimia.</p>
    </div>

    <div class="container top">
        <h2>Hadiah Pemenang</h2>

        <div class="row">
            <div class="col-md-2">
                <p>Juara 1 :</p>
            </div>
            <div class="col-md-10">
                <p>Rp4.500.000,00 + Sertifikat + Medali + Piala</p>
            </div>
            <div class="col-md-2">
                <p>Juara 2 :</p>
            </div>
            <div class="col-md-10">
                <p>Rp4.000.000,00 + Sertifikat + Medali + Piala</p>
            </div>
            <div class="col-md-2">
                <p>Juara 3 :</p>
            </div>
            <div class="col-md-10">
                <p>Rp3.500.000,00 + Sertifikat + Medali + Piala</p>
            </div>
            <div class="col-md-2">
                <p>Best Speakers :</p>
            </div>
            <div class="col-md-10">
                <p>Rp250.000 + Sertifikat</p>
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
                        <h5 class="card-title" style="height: 50px">Pendaftaran</h5>
                        <p class="card-text" style="height: 75px">Gelombang 1 : <br>
                            {{ $lini_masa[0]->date_1 }} -<br>
                            {{ $lini_masa[0]->date_2 }}
                        </p>
                        <p class="card-text" style="height: 75px">Gelombang 2 : <br>
                            {{ $lini_masa[0]->date_3 }} <br>
                            {{ $lini_masa[0]->date_4 }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">Preliminary</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[1]->date_1 }}</p>
                        <h5 class="card-title" style="height: 25px">Pengumuman</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[1]->date_2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">Quarter & Semi Final</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[2]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">Runner Up & Grand Final</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[3]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 275px">
                        <h5 class="card-title" style="height: 50px">Penghargaan</h5>
                        <p class="card-text" style="height: 75px">{{ $lini_masa[4]->date_1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <center>
            <button type="button" class="btn btn-outline-dark" id="button" onclick="download('cod')">Unduh Buku
                Panduan</button>
        </center>
    </div>
</div>

<style>
    body {
        background-image: url('images/COD/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection