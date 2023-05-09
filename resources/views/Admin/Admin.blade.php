@extends('Admin.ControlPanelMain')
@section('Main')
<h1 style="border-bottom : solid black">Welcome, {{ Auth::user()->name }}</h1>
    <div class="d-flex flex-wrap">

        <a href="/Admin/Berita" class="col bg-primary rounded m-3 p-5" style="height:300px">
            <img src="/Gambar/Koran.png" alt="" style="width: 150px">
            <h1><strong class="text-white">BERITA</strong></h1>
        </a>
        <a href="/Admin/Publikasi" class="col bg-primary rounded m-3 p-5" style="height:300px">
            <img src="/Gambar/Publikasi.png" alt="" style="height: 150px">
            <h1><strong class="text-white">PUBLIKASI</strong></h1>
        </a>
        <a href="/Admin/Galeri" class="col bg-primary rounded m-3 p-5" style="height:300px">
            <img src="/Gambar/image.png.png" alt="" style="height: 150px">
            <h1><strong class="text-white">GALERI</strong></h1>
        </a>
        <a href="/Admin/Galeri" class="col bg-primary rounded m-3 p-5" style="height:300px">
            <img src="/Gambar/Pesan.png" alt="" style="height: 150px">
            <h1><strong class="text-white">PESAN</strong></h1>
        </a>
    </div>
@endsection