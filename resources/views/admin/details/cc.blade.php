@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> ID : {{ $data->id }} </h1>
    </div>

    <p> Nama Ketua : {{ $data->person[0]->name }}</p>
    <p> Jenis Kelamin : {{ $data->person[0]->gender == 0 ? 'Laki-laki' : 'Perempuan' }} </p>
    <p> Nama Anggota : {{ $data->person[1]->name }} </p>
    <p> No Telp Ketua : {{ $data->person[0]->no_telp }} </p>
    <p> Email Ketua : {{ $data->person[0]->email }}</p>
    <p> Asal Sekolah : {{ $data->school }}</p>
    <p> Regional : {{ $data->regional->name }}</p>
    <p> Nama Guru Pendamping : {{ $data->person[2]->name }}</p>
    <p> No Telp Guru Pendamping : {{ $data->person[2]->no_telp }}</p>
    <p> Email Guru Pendamping : {{ $data->person[2]->email }}</p>
    <p> Kartu Pelajar : <a download="KP-{{$data->person[0]->scan_kartu_pelajar}}" href="/admin/peserta/{{$data->person[0]->scan_kartu_pelajar}}" title="KP">{{$data->person[0]->scan_kartu_pelajar}}</a> </p>
    <p> Pas Foto : <a download="PF-{{$data->person[0]->foto}}" href="/admin/peserta/{{$data->person[0]->foto}}" title="PF">{{$data->person[0]->foto}}</a></p>

    <h5> Setujui :  <a href="\admin\acc\{{$data->id}}" class="btn btn-primary mx-3"> Lolos </a></h5>
    <h5> Tolak : </h5> 
    <form action="\admin\reject\{{$data->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Alasan : </label>
            <textarea class="form-control" rows="3" name="reason" required></textarea>
        </div>
        <br>
        <button  class="btn btn-danger" type="submit">Tidak Lolos</button>
    </form>
</div>
@endsection