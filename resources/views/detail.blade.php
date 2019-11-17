@extends('layouts/app')

@section('content')

<!-- content -->
<div>
    <div class="daun"><img src="{{ asset('img/daon.png') }}"></div>
    <div class="gambarkelas"><img style="width: 22px; margin-left: -8px; margin-top: -15px" src="{{ asset('img/Path 8.png') }}" alt=""></div>
    <div class="ruang text-center text-white"><b>Ruang Tefa</b></div>
</div>

<!-- detail -->
<div class="bungkusdetail">
    <!-- Guru -->
    <div class="gambarguru"><img src="{{ asset('img/Path 1.png') }}" alt=""></div>
    <div class="detailguru">
        <p style="margin-top: -8px; margin-left: 15px"><b>Guru Mata Pelajar :</b> <span>Puguh Rismandi</span></p>
    </div>
    <!-- Ruangan -->
    <div class="gambarruang mt-3"><img style="margin-left: -2px; margin-top: -10px" src="{{ asset('img/Path 8.png') }}" alt=""></div>
    <div class="detailruang text-center mt-3">
        <p style="margin-top: -8px; margin-left: -15px"><b>Ruangan :</b> <span>Ruang Tefa</span></p>
    </div>
    <!-- Detail menunggu -->
    <div class="detailmenunggu ml-4 mt-4 text-center"><span><img style="margin-right: 5px" src="{{ asset('img/Path 10.png') }}" alt="">
        </span>menunggu tapping siswa
    </div>
</div>

@endsection