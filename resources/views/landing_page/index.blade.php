@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row mt-5">
        {{-- <div class="col-ms-12"> --}}
            <div class="col-ms-2">
                
            </div>
            <center><div class="col-md-10 border border-3 border-dark bg-light" id="response">
                <div class="mid-header">
                    <h1 class="fw-bold"> Chemistry Fair UI 2022 </h1>
                    <h4> Kompetisi Nasional Departemen Kimia Universitas Indonesia </h5>
                    <p> Chemistry Fair UI kembali hadir di tahun 2022 dengan tema "Preparing The Future's Health and Lifestyle for Endemic Era to Achieve The Better Well Being of Society" </p>
                </div>
            </div></center>
            <div class="col-ms-2">
                
            </div>
        {{-- </div> --}}
    </div>
    <div class="container" id="header-body">
        <div class="float-start" id="img-bottle">
            <img src="images/Landing Page/alpukat-botol-minum.png" class="rounded img-fluid" alt="...">
        </div>
        <div class="float-end" id="img-maskot">
            <img src="images/Landing Page/maskot.png" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <div class="my-5 py-5"></div>
    <br><br>
    <div class="row px-10">
        <div class="col-md-8">
            <div class="px-10 py-5 border border-3 border-dark bg-light">
                <p> Selama 11 tahun, Chemistry Fair UI telah hadir untuk memberikan kontribusi terbaik bagi masyarakat dan pendidikan. Tahun ini, kami mengajak kalian berinovasi untuk gaya hidup sehat melalui rangkaian olimpiade ajang seni, dan acara lainnya. </p>
                <p> Pada tahun 2022, Chemistry Fair UI mengundang pada pejuang hidup sehat dari segala usia dan latar belakang untuk bersama menyebarkan misi baik atas nama kesehatan. Melalui 5 mata acara unggulan Chemistry Fair UI: Chemistry Competition, Chemistry Innovation Project, Chempaign, Seminar Nasional, dan Chemistry Open Debate, kami percaya bahwa setiap jiwa memiliki keinginan untuk berkontribusi dalam menyiapkan masa depan yang lebih baik. <p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="row">
                <div class="col mt-1 p-3">
                    <img src="images/Landing Page/semnas.png" class="event"/>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col p-3">
                    <img src="images/Landing Page/cod.png" class="event"/>
                </div>
                <div class="col pt-3">
                    <img src="images/Landing Page/cip.png" class="event"/>
                </div>
            </div>
            <div class="row">
                <div class="col p-3">
                    <img src="images/Landing Page/chempaign.png" class="event"/>
                </div>
                <div class="col pt-3">
                    <img src="images/Landing Page/cc.png" class="event"/>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        <div class="sponsor mt-5">
            <h1 class="text-center"> Our Sponsor </h1><br>
        </div>
        <center>
        <div id="sponsor" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 400px;">
                <div class="carousel-item active">
                        <img src="{{ $sponsor[0]->image }}" class="d-block mx-auto" alt="..." width="auto" height="400px">
                </div>
                @if($sponsor->count() > 1 )
                    @for ($i = 1; $i < $sponsor->count(); $i++)
                        <div class="carousel-item">
                            <img src="{{ $sponsor[$i]->image }}" class="d-block mx-auto" alt="..." width="auto" height="400px">
                        </div>
                    @endfor
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sponsor" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sponsor" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="my-5"></div>
        <div class="my-5"></div>

        </center>
        <div class="partner">
            <h1 class="text-center"> Media Partners </h1> <br>
        </div>
        <center>
        <div id="partner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 400px;">
                <div class="carousel-item active">
                        <img src="{{ $partner[0]->image }}" class="d-block mx-auto" alt="..." width="auto" height="400px">
                </div>
                @if($partner->count() > 1 )
                    @for ($i = 1; $i < $partner->count(); $i++)
                        <div class="carousel-item">
                            <img src="{{ $partner[$i]->image }}" class="d-block mx-auto" alt="..." width="auto" height="400px">
                        </div>
                    @endfor
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#partner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#partner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </center>
    </div>
</div>

<style>
    body {
        background-image: url('images/Landing Page/bg-1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection