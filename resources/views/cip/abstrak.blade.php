@extends('layouts.app')

@section('content')

<div class="container top">
    <h1>Abstrak Chemistry Innovation Project</h1>
    <br>
    @if ($status == 5)
        <h3>Abstrak sedang diverifikasi oleh Panitia</h3>
    @else
        <h3>Terima kasih sudah mendaftar Chemistry Innovation Project.<br>Pengumpulan berkas dikumpulkan melalui email chemistryfairui2022@gmail.com disertai judul, deskripsi, nama individu atau ketua tim (format zip/rar) dengan format penamaan sesuai dengan yang ada di buku panduan Chempaign.<br>CP : - Raisa Nadira Mutia Zahra (081283314668/raisanadiramutia), Kesya Auranti Haryasukma.</h3>
    @endif
</div>

<style>
    body {
        background-image: url({{url('images/CIP/bg-1.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection