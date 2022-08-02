@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="text-center">
        <h1 class="my-5"> News </h1>
        <img src="images/News/maskot.png" width="15%">
    </div>
    <div class="p-5 mt-5">
        <div class="row">
            <div class="col-10">
                <h3 class="mb-3"> Berita Terkini </h3>
            </div>
            <div class="col-2 text-end">
                <a class="btn btn-primary mb-3 mr-1" data-bs-target="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " data-bs-target="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
    
                    <div class="carousel-inner">
                        @foreach ($news as $key => $new)
                            @if ($key % 3 == 0 && $key < 3)
                                <div class="carousel-item active">
                                    <div class="row">
                            @elseif ($key % 3 == 0)
                                <div class="carousel-item">
                                    <div class="row">
                            @endif
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="{{ $new->image }}">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $new->title }}</h4>
                                                <p class="card-text">{{ $new->description }}</p>
                                                <a class="btn btn-outline-info" href="{{ $new->link }}"> Lihat Selengkapnya </a>
                                            </div>
        
                                        </div>
                                    </div>
        
                            @if ($key % 3 == 0)
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-image: url('images/News/background.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection