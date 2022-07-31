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
                @if ($comp->status == 1 & $comp->chemistry_id != 8)
                    @if ($comp->chemistry_id == 5)
                        <a href="/payment/cc/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 6)
                        <a href="/payment/cip/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                    @if ($comp->chemistry_id == 7)
                        <a href="/payment/cod/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                    @endif
                @elseif ($comp->status == 2)
                    <p>Menunggu verifikasi</p>
                @elseif ($comp->status == 3)
                    <p>Sudah verifikasi pembayaran</p>
                @elseif ($comp->status == 4)
                    <a href="/abstrak/cip/{{ $comp->id }}" class="btn btn-info" style="float: right"> Silahkan Lakukan Pembayaran </a>
                @elseif ($comp->status == 5)
                    <p>Menunggu verifikasi abstrak</p>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    body {
        background-image: url('images/News/background.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection