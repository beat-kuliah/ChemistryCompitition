@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="row">
            <a href="/" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">Home</a>
            <a href="/admin/cc" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">CC</a>
            <a href="/admin/cod" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">COD</a>
        </div>
        <div class="row">
            <a href="/admin/cip" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">CIP</a>
            <a href="/admin/semnas" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">Semnas</a>
            <a href="/admin/chempaign" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">Chempaign</a>
        </div>
        <div class="row">
            <a href="/admin/lini_masa" class="btn btn-outline-primary col-lg-3 mb-3" style="padding:50px; margin:10px">Lini Masa</a>
        </div>
    </div>
</div>
@endsection