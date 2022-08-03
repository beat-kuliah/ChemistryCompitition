@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit News </h1>
    </div>
    <form action="/admin/news/{{$news->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" value="{{$news->title}}" required>
        </div>
        <br>
        <div class="form-group">
            <label>Image :  * Jika tidak mengubah, kosongkan saja</label> <br>
            <input type="file" name="file">
        </div>
        <br>
        <div class="form-group">
            <label>Description : </label>
            <textarea class="form-control" rows="3" name="desc" required>{{$news->description}}</textarea>
        </div>
        <br>

        <button  class="btn btn-dark" type="submit">Submit</button>
    </form>
</div>
@endsection