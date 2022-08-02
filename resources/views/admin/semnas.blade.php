@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Seminar Nasional </h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Instastory</th>
            <th scope="col">Konfirmasi</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @if(count($data) == 0)
                <tr>
                    <td colspan="5" class="text-center"> Belum ada data </td>
                </tr>
            @else
                @foreach ($data as $key => $item)
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <td> {{ $item->person[0]->name }} </td>
                        @if( $item->status == 1)
                            <td> Belum Dibayar </td>
                        @elseif( $item->status == 2 )
                            <td> Menunggu Konfirmasi </td>
                        @elseif ($item->status == 3)
                            <td> Sudah Dikonfirmasi </td>
                        @else
                            <td> Dibatalkan </td>
                        @endif
                        <td> <a download="Instastory-{{$item->person[0]->name}}" href="/admin/peserta/{{$item->abstrak}}" title="Instastory">{{$item->abstrak}}</a> </td>
                        <td>
                            <a class="btn btn-outline-info {{ $item->status == 3 || $item->status == 4 ? 'disabled' : ''}}" href="/admin/confirm/{{$item->id}}" {{ $item->status == 3 || $item->status == 4 ? 'disabled' : '' }}> Konfirmasi </a>
                            <a class="btn btn-danger {{ $item->status == 4 ? 'disabled' : ''}}" href="/admin/cancel/{{$item->id}}"> Batalkan </a>
                        </td>
                        <td><a class="btn btn-outline-warning" href="/admin/semnas_detail/{{$item->id}}"> Detail </button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
</div>
@endsection