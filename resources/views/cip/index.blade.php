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
    <h1 class="fw-bold"> Chemistry Innovation Project </h1>
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
                        <h3>Ajang inovasi untuk para inovator</h3>
                        <br>
                        <a class="btn btn-outline-dark" id="button" href="">Daftar</a>
                        <a class="btn btn-outline-dark" id="button" href="#cip">Tentang CIP</a>
                    </div>
                </div>
            </center>
            <div class="col-ms-2">

            </div>
            {{-- </div> --}}
        </div>
    </div>

    <div class="container top" id="cip">
        <h2>Tunjukkan inovasi terbaikmu.</h2>
        <h2>Dari manapun kamu berada.</h2>

        <p>Mengangkat tema “Meningkatkan Kualitas Kesehatan Masyarakat dalam Menghadapi Era New Normal Untuk Mencapai Nilai ke 3 SDGs”. Chemistry Innovation Project mengajak para inovator dibidang kimia untuk menunjukkan ide terbaiknya di CIP Exhibition – inovasi kami untuk para inovator. Agar karya hebatmu dapat dijangkau dari manapun, secara daring.</p>
    </div>

    <div class="container top" id="cod">
        <h2>Sub tema</h2>

        <p>- Pembuatan Alat Kesehatan dari Limbah Sampah atau Tumbuhan.</p>
        <p>- Pemanfaatan Tumbuhan Obat Indonesia untuk Pengembangan Anti Virus di Era andemi Covid-19.</p>
        <p>- Alternatif Pemakaian Bahan Makanan yang Lebih Sehat untuk Peningkatan Kesehatan.</p>
    </div>

    <div class="container top">
        <h2>Hadiah Pemenang</h2>

        <div class="row">
            <div class="col-md-3">
                <p>Juara 1 Tingkat Mahasiswa :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 5.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara 2 Tingkat Mahasiswa :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 4.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara 3 Tingkat Mahasiswa :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 3.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara 1 Tingkat SMA :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 5.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara 2 Tingkat SMA :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 4.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara 3 Tingkat SMA :</p>
            </div>
            <div class="col-md-9">
                <p>Rp 3.000.000,00 + Piala + Sertifikat</p>
            </div>
            <div class="col-md-3">
                <p>Juara Favorit :</p>
            </div>
            <div class="col-md-9">
                <p>Rp750.000 + Piala + Sertifikat</p>
            </div>
        </div>
    </div>

    <div class="container top">
        <h2>Lini masa</h2>
        <br>
        <div class="row">
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Pendaftaran</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[0]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Pengumpulan abstrak</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[1]->date_1 }} -<br>{{ $lini_masa[1]->date_2 }}</p>
                        <h5 class="card-title" style="height: 125px">Pengumuman Lulus Abstrak</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[1]->date_3 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Pembayaran Administrasi dan Pengumpulan Full Paper</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[2]->date_1 }} -<br> {{ $lini_masa[2]->date_2 }}</p>
                        <h5 class="card-title" style="height: 125px">Pengumuman Lulus Makalah</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[2]->date_3 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Technical Meeting Peserta</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[3]->date_1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Presentasi Tingkat Mahasiswa</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[4]->date_1 }}</p>
                        <h5 class="card-title" style="height: 125px">Presentasi Tingkat Siswa SMA atau Sederajat</h5>
                        <p class="card-text" style="height: 50px">{{ $lini_masa[4]->date_2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-body" style="height: 500px">
                        <h5 class="card-title" style="height: 150px">Pengumuman</h5>
                        <p class="card-text" style="height: 100px">{{ $lini_masa[5]->date_1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <center>
            <button type="button" class="btn btn-outline-dark" id="button" onclick="download('cip')">Unduh Buku
                Panduan</button>
        </center>
    </div>
</div>

<style>
    body {
        background-image: url('images/cip/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection