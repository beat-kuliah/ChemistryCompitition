@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> ID : {{ $data->id }} </h1>
    </div>

    <p> Nomor Identitas Ketua : {{$data->person[0]->no_identitas}}</p>
    <p> Nama Ketua : {{ $data->person[0]->name }}</p>
    <p> Jenis Kelamin : {{ $data->person[0]->gender == 0 ? 'Laki-laki' : 'Perempuan' }} </p>
    <p> Kartu Pelajar Ketua : <a download="KP-{{$data->person[0]->scan_kartu_pelajar}}" href="/admin/peserta/{{$data->person[0]->scan_kartu_pelajar}}" title="KP">{{$data->person[0]->scan_kartu_pelajar}}</a></p>
    <p> Pas Foto Ketua : <a download="PF-{{$data->person[0]->foto}}" href="/admin/peserta/{{$data->person[0]->foto}}" title="PF">{{$data->person[0]->foto}}</a> </p>

    <br>
    <p> Nomor Identitas Anggota 1 : {{$data->person[1]->no_identitas}}</p>
    <p> Nama Anggota 1 : {{ $data->person[1]->name }}</p>
    <p> Jenis Kelamin : {{ $data->person[1]->gender == 0 ? 'Laki-laki' : 'Perempuan' }} </p>
    <p> Kartu Pelajar Anggota 1 : <a download="KP-{{$data->person[1]->scan_kartu_pelajar}}" href="/admin/peserta/{{$data->person[1]->scan_kartu_pelajar}}" title="KP">{{$data->person[1]->scan_kartu_pelajar}}</a></p>
    <p> Pas Foto Anggota 1 : <a download="PF-{{$data->person[1]->foto}}" href="/admin/peserta/{{$data->person[1]->foto}}" title="PF">{{$data->person[1]->foto}}</a> </p>

    <br>
    <p> Nomor Identitas Anggota 2 : {{$data->person[2]->no_identitas}}</p>
    <p> Nama Anggota 2 : {{ $data->person[2]->name }}</p>
    <p> Jenis Kelamin : {{ $data->person[2]->gender == 0 ? 'Laki-laki' : 'Perempuan' }} </p>
    <p> Kartu Pelajar Anggota 2 : <a download="KP-{{$data->person[2]->scan_kartu_pelajar}}" href="/admin/peserta/{{$data->person[2]->scan_kartu_pelajar}}" title="KP">{{$data->person[2]->scan_kartu_pelajar}}</a></p>
    <p> Pas Foto Anggota 2 : <a download="PF-{{$data->person[2]->foto}}" href="/admin/peserta/{{$data->person[2]->foto}}" title="PF">{{$data->person[2]->foto}}</a> </p>

    <br>
    <p> Email Ketua : {{ $data->person[0]->email }} </p>
    <p> Nama Guru Pendamping : {{ $data->person[3]->name }} </p>
    <p> No Telp Guru Pendamping : {{ $data->person[3]->no_telp }}</p>
    <p> Email Guru Pendamping : {{ $data->person[3]->email }}</p>
</div>
@endsection