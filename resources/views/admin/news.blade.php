@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> News </h1>
    </div>

    <a class="btn btn-outline-info" href="/admin/news/add"> Tambah </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Ubah</th>
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
                        <td> {{ $item->title }} </td>
                        <td> <img src="{{ url('/upload/'.$item->image) }}" width="50px"/> </td>
                        <td> {{ substr($item->description,0, 50) }}... </td>
                        <td>
                            <a class="btn btn-outline-info" href="/admin/news/{{$item->id}}"> Edit </a>
                            <a class="btn btn-danger" href="/admin/delete/{{$item->id}}"> Hapus </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
</div>

@if(session()->has('alert'))
    <script>
        alert({{ session()->get('alert') }});
    </script>
@endif 

@endsection