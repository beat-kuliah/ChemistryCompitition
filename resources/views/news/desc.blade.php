@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="text-center">
        <h1 class="my-5"> {{ $news->title }} </h1>
        <div class="m-5">
            <p> {{ $news->description }}</p>
        </div>
    </div>
</div>

<style>
    body {
        background-image: url({{url('images/News/background.png')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection