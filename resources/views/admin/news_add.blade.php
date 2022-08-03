@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah News </h1>
    </div>
    <form action="{{ route('news.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <br>
        <div class="form-group">
            <label>Image : </label>
            <input type="file" name="file" required>
        </div>
        <br>
        <div class="form-group">
            <label>Description : </label>
            <textarea class="form-control" rows="3" name="desc" required></textarea>
        </div>
        <br>

        <button  class="btn btn-dark" type="submit">Submit</button>
    </form>
</div>
@endsection