@extends('layouts.app')

@section('content')

<div class="container top">
    <center><h1>Chemistry Competition</h1></center>
    <br>
    <form>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ketua</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Anggota</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Telepon Ketua</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email Ketua</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Regional</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Guru Pendamping</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Telepon Guru Pendamping</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email Guru Pendamping</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Upload Scan Kartu Pelajar</label>
            <div class="col-sm-10" id="middle-height">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Upload Pas Foto</label>
            <div class="col-sm-10" id="middle-height">
                <input type="text" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<style>
    body {
        /* background-image: "{{ URL::to('images/CC/bg-1.jpg') }}"; */
        background-image: url('../images/CC/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection