@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> ID : {{ $data->id }} </h1>
    </div>

    <p> Tipe Chempaign :  {{ $data->chempaign->name }}</p>
    <p> Nama Ketua : {{ $data->person[0]->name }}</p>
    @if ( count($data->person) > 1 )
        @for ( $i = 1; $i <= count($data->person); $i++ )
            <p> Nama Anggota : {{ $data->person[$i]->name }} </p>
        @endfor
    @endif
    <p> Instansi: {{ $data->school }}</p>
    <p> Regional : {{ $data->regional->name }}</p>
    <p> No Indentitas Ketua : {{ $data->person[0]->no_identitas }} </p>
    <p> Jenis Kelamin : {{ $data->person[0]->gender == 0 ? 'Laki-laki' : 'Perempuan' }} </p>
    <p> No Telp Guru Pendamping : {{ $data->person[0]->no_telp }}</p>
    <p> Alamat Ketua : {{ $data->person[0]->address }} </p>
    <p> Alamat Ketua : {{ $data->person[0]->email }} </p>
    <p> Id Line : {{ $data->person[0]->id_line }} </p>
    <p> Kartu Pelajar : <a download="KP-{{$data->person[0]->scan_kartu_pelajar}}" href="/admin/peserta/{{$data->person[0]->scan_kartu_pelajar}}" title="KP">{{$data->person[0]->scan_kartu_pelajar}}</a> </p>

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