@extends('Main')
{{-- https://diskapang.ntbprov.go.id/po-content/uploads/banner.jpg --}}
{{-- https://diskapang.ntbprov.go.id/po-includes/images/logo.png --}}
<style>
    @import url(https://fonts.googleapis.com/css?family=Fjalla+One);
    #AboutAndAnnouncement{
        font-family: 'Fjalla One', sans-serif;
        text-transform: uppercase;
    }
    h2 {
        text-decoration-color: #c7ad07;
        text-decoration: underline;
    }
</style>
@section('Main')
    <div class="p-5 text-center bg-image rounded-3" style="background-image: url('https://diskapang.ntbprov.go.id/po-content/uploads/banner.jpg');background-repeat: no-repeat;background-size: 100% auto;background-position: center; height: 400px;">
    </div>
    <div id="AboutAndAnnouncement" class="d-flex">
        <h2 id="About" class="p-2 w-25 flex-fill flex-grow-1">
            <span>About</span>
        </h2>
        <h2 id="Announcement" class="p-2 flex-fill">
            <span>Pengumuman</span>
        </h2>
    </div>
@endsection
