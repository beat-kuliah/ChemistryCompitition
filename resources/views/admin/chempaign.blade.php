@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Chempaign </h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipe</th>
            <th scope="col">Ketua</th>
            <th scope="col">Anggota</th>
            <th scope="col">Status</th>
            <th scope="col">Lolos/Tidak</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Konfirmasi</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @if(count($data) == 0)
                <tr>
                    <td colspan="9" class="text-center"> Belum ada data </td>
                </tr>
            @else
                @foreach ($data as $key => $item)
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <th>{{ $item->chempaign->name }}</th>
                        <td>{{ $item->person[0]->name }}</td>
                        <td>
                        @if($item->chempaign_type_id == 2)
                            @foreach ($item->person as $map => $p)
                                @if($map > 0)
                                    @if($map > 1)
                                    <br>
                                    @endif
                                    {{ $p->name }}
                                @endif
                            @endforeach
                        @else
                            -
                        @endif
                        </td>
                        @if( $item->status == 1)
                            <td> Belum Dibayar </td>
                        @elseif( $item->status == 2 )
                            <td> Menunggu Konfirmasi </td>
                        @elseif ($item->status == 3)
                            <td> Sudah Dikonfirmasi </td>
                        @else
                            <td> Dibatalkan </td>
                        @endif
                        @if( $item->lolos == 1)
                            <td> Lolos </td>
                        @elseif ($item->lolos == 2)
                            <td> Tidak Lolos : {{$item->alasan}} </td>
                        @else
                            <td> Belum Verif </td>
                        @endif
                        <td> <a download="Payment-{{$item->payment}}" href="/admin/payment/{{$item->payment}}" title="Payment">{{$item->payment}}</a> </td>
                        <td>
                            <a class="btn btn-outline-info {{ $item->status == 3 || $item->status == 0 ? 'disabled' : ''}}" href="/admin/confirm/{{$item->id}}" {{ $item->status == 3 || $item->status == 0 ? 'disabled' : '' }}> Konfirmasi </a>
                            <a class="btn btn-danger {{ $item->status == 0 ? 'disabled' : ''}}" href="/admin/cancel/{{$item->id}}"> Batalkan </a>
                            <td><a class="btn btn-outline-warning" href="/admin/chempaign_detail/{{$item->id}}"> Detail </button></td>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
</div>
@endsection