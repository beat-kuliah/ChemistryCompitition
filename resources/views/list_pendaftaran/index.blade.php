@extends('layouts.app')

@section('content')

<div class="container top">
    <h1>List Pendaftaran</h1>
    <br>

    @foreach ($competition as $comp)
    <div class="card" id="list_pendaftaran">
        <div class="card-body">
            <h4>{{ $comp->chemistry->name }}</h4>
            <div>
                @if ($comp->status == 1)
                    @if ($comp->chemistry_id == 5)
                        <a href="/payment/cc/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 6)
                        <a href="/payment/cip/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 7)
                        <a href="/payment/cod/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 9)
                        <a href="/payment/chempaign/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 8)
                        <p>Terima Kasih telah mendaftarkan diri pada Seminar Nasional Chemistry Fair UI 2022.<br>Informasi Selanjutnya mengenai Seminar Nasional akan diberitahukan melalui email.<br>CP = farahmpw/082232180234 (Farah)</p>
                    @endif
                @elseif ($comp->status == 2)
                    <p>Menunggu verifikasi</p>
                @elseif ($comp->status == 3)
                    @if ($comp->chemistry_id == 9)
                        <p> Pengumpulan berkas dikirimkan melalui email chemistryfairui2022@gmail.com disertai judul dan deskripsi serta nama individu atau ketua tim</p>
                    @elseif ($comp->chemistry_id == 6)
                        <p> Pengumpulan Makalah dikirimkan melalui email chemistryfairui2022@gmail.com disertai judul dan deskripsi serta nama individu atau ketua tim</p>
                        <a href="/cip/makalah" class="btn btn-info" style="float: right"> Silahkan upload makalah </a>
                    @else
                        <p>Sudah verifikasi pembayaran</p>
                    @endif
                @elseif ($comp->status == 4)
                    <a href="/abstrak/cip/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Upload Abstrak </a>
                @elseif ($comp->status == 5)
                    <p>Menunggu hasil pengumuman lolos abstrak</p>
                @endif
                
                @if ( $comp->chemistry_id != 8 || $comp->chemistry_id != 9)
                    @if( $comp->status == 1)
                        @if($comp->chemistry_id == 6)
                        <a> <b> Hasil Seleksi : </b> Lolos abstrak</a>
                            <p>SELAMAT ABSTRAK TIM ANDA LOLOS KE TAHAP BERIKUTNYA</p>
                        @elseif($comp->chemistry_id == 7)
                            <p>Selamat anda dinyatakan lolos tahap Semifinal Chemistry Open Debate, tunggu informasi selanjutnya dari kami. Christopher Jenaro (088212076020/cikoboll)</p>
                        @endif
                    @elseif ($comp->lolos == 2)
                        <a> <b> Hasil Seleksi : </b> Mohon maaf anda tidak lolos </a>
                        <p>Mohon maaf anda tidak lolos ke tahap berikutnya, tetap semangat dan jangan menyerah! e-sertifikat akan dikirimkan melalui email setelah H+2 minggu rangkaian acara Chemistry Fair Selesai.</p> 
                    @elseif ($comp->lolos == 10)
                        <a> <b> Hasil Seleksi : </b> Lolos makalah</a>
                        <p>Mohon maaf anda tidak lolos ke tahap berikutnya, tetap semangat dan jangan menyerah! e-sertifikat akan dikirimkan melalui email setelah H+2 minggu rangkaian acara Chemistry Fair Selesai.</p>
                    @elseif ($comp->lolos == 11)
                        <a> <b> Hasil Seleksi : </b> Tidak Lolos Makalah</a>
                        <p>Mohon maaf anda tidak lolos ke tahap berikutnya, tetap semangat dan jangan menyerah! e-sertifikat akan dikirimkan melalui email setelah H+2 minggu rangkaian acara Chemistry Fair Selesai.</p>
                    @else
                        <a> <b> Hasil Seleksi : </b>  Belum Diverifikasi </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    body {
        background-image: url({{url('images/News/background.png')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection