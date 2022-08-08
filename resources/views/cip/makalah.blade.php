@extends('layouts.app')

@section('content')

<div class="container top">
    <h1>Abstrak Chemistry Innovation Project</h1>
    <br>
    <h3>Silahkan kirimkan makalah melalui email chemistryfairui2022@gmail.com disertai judul dan deskripsi serta nama individu atau ketua tim</h3>
    <br><br>
    <h3>Pengumuman 9 besar KTI tingkat SMA/Sederajat dan 9 Besar tingkat perguruan tinggi jatuh pada tanggal 22 Oktober 2022 di website CF 2022.<br>Para peserta yang lolos full paper/makalah diwajibkan untuk mempresentasikan karyanya pada babak final CIP dan membuat prototype karya tulis ilmiahnya.<br>Presentasi akan dilaksanakan pada 12 November (Tingkat mahasiswa) dan 13 November (Tingkat SMA/Sederajat).</h3>
</div>

<style>
    body {
        background-image: url({{url('images/CIP/bg-1.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection