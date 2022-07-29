@extends('layouts.app')

@section('content')

<div class="container top">
    <div class="container" id="header-body-cc">
        <div class="float-start" id="img-bottle">
            <img src="images/CC/alpukat-botol-minum.png" class="rounded img-fluid" alt="...">
        </div>
        <div class="float-end" id="img-maskot">
            <img src="images/cip/supri-1.png" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <center><h1 class="fw-bold">Seminar Nasional</h1></center>
    <br>
    <div class="container">
        <div class="row">
            {{-- <div class="col-ms-12"> --}}
            <div class="row col-ms-2">
                <div class="col-md-1">

                </div>
                <div class="col-md-7">
                     <h3>Masa depan yang berkelanjutan dimulai dari sini.</h3>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <center>
                <div class="col-md-10" id="response">
                    <div class="mid-header" id="mv-btn">
                        <br>
                        <a class="btn btn-outline-dark" id="button" href="/daftar/semnas">Daftar</a>
                        <a class="btn btn-outline-dark" id="button" href="#semnas">Tentang Semnas</a>
                    </div>
                </div>
            </center>
            <div class="col-ms-2">

            </div>
            {{-- </div> --}}
        </div>
    </div>

    <div class="container top" id="semnas">
        <h2>Gali lebih dalam mengenai peran Kimia pada gaya hidup sehat dan investasi kesehatan untuk masa depan yang berkelanjutan</h2>

        <p>Tema yang akan dibawakan pada Seminar Nasional tahun ini yaitu “The Chemistry Behind A Healthy Lifestyle” pada hari pertama dan “Your Body Your Investment” pada hari kedua.</p>
    </div>

    <div class="container top" id="cod">
        <h2>Para Pembicara</h2>

        <div style="height: 300px;"></div>

        <h2 class="fw-bold" id="font">Bebas Biaya Pendaftaran</h2>
    </div>

    <div class="container top">
        <h2>Lini masa</h2>
        <br>
        <center>
        <div class="row">
            <div class="col-xl-6" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Day 1</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[0]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Day 2</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[1]->date_1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        </center>
        <br><br>
        <center>
            <button type="button" class="btn btn-outline-dark" id="button" onclick="download('poster_twibbon')">Unduh Poster dan Twibbon</button>
        </center>
    </div>
</div>

<style>
    body {
        background-image: url('images/semnas/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection