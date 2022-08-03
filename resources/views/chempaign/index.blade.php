@extends('layouts.app')

@section('content')

<div class="container top">
    <div class="container" id="header-body-cc">
        <div class="float-start" id="img-bottle">
            <img src="images/CC/alpukat-botol-minum.png" class="rounded img-fluid" alt="...">
        </div>
        <div class="float-end" id="img-maskot">
            <img src="images/chempaign/supri-1.png" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <center><h1 class="fw-bold">Chempaign</h1></center>
    <div class="container">
        <div class="row">
            {{-- <div class="col-ms-12"> --}}
            <div class="row col-ms-2">
                <div class="col-md-1">

                </div>
                <div class="col-md-7">
                    
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <center>
                <div class="col-md-10" id="response">
                    <div class="mid-header" id="mv-btn">
                        <h3>Ajang kesenian untuk kamu yang ingin berkontribusi melalui seni</h3>
                        <br>
                        <a class="btn btn-outline-dark" id="button" href="/daftar/chempaign">Daftar</a>
                        <a class="btn btn-outline-dark" id="button" href="#chempaign">Tentang Chempaign</a>
                    </div>
                </div>
            </center>
            <div class="col-ms-2">

            </div>
            {{-- </div> --}}
        </div>
    </div>

    <div class="container top" id="chempaign">
        <h2>Suarakan permasalahan kesehatan dimasyarakat melalui kreativitasmu</h2>

        <p>Dengan mengangkat tema “The Chemistry Between You and Your Creativity”, Chempaign mengajak kamu untuk menyalurkan karya mengenai permasalahan kesehatan di masyarakat serta cara menjaga kesehatan tubuh melalui gaya hidup yang lebih sehat</p>
    </div>

    <div class="container top" id="cod">
        <h2>Kategori Lomba</h2>
        <br>
        <center>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <img class="rounded img-fluid" src="images/chempaign/movie-1.png" alt="">
                <p>Movie Project</p>
            </div>
            <div class="col-md-2">
                <img class="rounded img-fluid" src="images/chempaign/daily-vlog-1.png" alt="">
                <p>Daily Vlog</p>
            </div>
            <div class="col-md-2">
                <img class="rounded img-fluid" src="images/chempaign/poster-1.png" alt="">
                <p>Poster Design</p>
            </div>
            <div class="col-md-2">
                <img class="rounded img-fluid" src="images/chempaign/photography-1.png" alt="">
                <p>Photography</p>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
        </center>
    </div>

    <div class="container top">
        <h2>Hadiah Pemenang</h2>
        <br>
        <div class="row">
            <div class="col-md-1">
                <p>Juara 1 :</p>
            </div>
            <div class="col-md-11">
                <p>Rp 250.000 + Exhibition + Sertifikat**</p>
            </div>
            <div class="col-md-1">
                <p>Juara 2 :</p>
            </div>
            <div class="col-md-11">
                <p>Rp 200.000 + Exhibition + Sertifikat**</p>
            </div>
            <div class="col-md-1">
                <p>Juara 3 :</p>
            </div>
            <div class="col-md-11">
                <p>Rp 150.000 + Exhibition + Sertifikat**</p>
            </div>
        </div>
        <p>** Sertifikat berupa E-Sertifikat</p>
    </div>

    <div class="container top">
        <h2>Lini masa</h2>
        <br>
        <div class="row">
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Pendaftaran</h5>
                        <p class="card-text">{{ $lini_masa[0]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Pengumpulan Karya</h5>
                        <p class="card-text">{{ $lini_masa[1]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Online Voting</h5>
                        <p class="card-text">{{ $lini_masa[2]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Exhibition Day</h5>
                        <p class="card-text">{{ $lini_masa[3]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 150px">
                        <h5 class="card-title" style="height: 50px">Pengumuman Juara</h5>
                        <p class="card-text">{{ $lini_masa[4]->date_1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <center>
            <button type="button" class="btn btn-outline-dark" id="button" onclick="download('chempaign')">Unduh Buku
                Panduan</button>
        </center>
    </div>
</div>

<style>
    body {
        background-image: url({{url('images/chempaign/bg-1.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection