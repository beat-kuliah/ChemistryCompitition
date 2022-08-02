@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> ID : {{ $data->id }} </h1>
    </div>

    <p> Status Sekolah :  {{$data->person[0]->mahasiswa == 0 ? 'Siswa' : 'Mahasiswa'}} </p>
    <p> Nama Lengkap : {{ $data->person[0]->name }}</p>
    <p> No Telp : {{ $data->person[0]->no_telp }}</p>
    <p> Email : {{ $data->person[0]->email }} </p>
</div>
@endsection