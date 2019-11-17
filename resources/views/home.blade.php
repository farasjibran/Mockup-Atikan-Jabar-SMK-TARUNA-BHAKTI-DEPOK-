@extends('layouts.app')

@section('content')

<!-- content -->
<div class="container text-center">
    <div class="daun"><img src="{{ asset('img/daon.png') }}"></div>
    <div class="people-img pt-5"><img style="width: 136px; height: 136px;" src="{{ asset('img/Path 1.png') }}" alt=""></div>
    <h3 style="margin-top:50px">Smart <span class="text-primary">Classroom</span></h3>
    <a href="{{ route('detail')}}">
        <div class="name-place mt-4 text-center pt-2"><span class="place">Ruang Tefa</span></div>
    </a>
    <p class="status">*menunggu tapping kartu</p>
</div>

@endsection