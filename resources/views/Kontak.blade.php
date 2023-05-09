@extends('Main')
@section('Main')
<h2>Kirim Pesan</h2>
<form action="/Kontak/store" method="post" class="" style="width:100%">
    @csrf
    <label for="Name">Nama</label>
    <input type="text" name="Name" id="Name" class="form-control">
    {{-- <input type="hidden" name="Berita_id" id="Berita_id" class="form-control" value="{{ $berita->id }}"> --}}
    <label for="Email"> E-mail</label>
    <input type="text" name="Email" id="Email" class="form-control">
    <label for="Subjek"> Subjek</label>
    <input type="text" name="Subjek" id="Subjek" class="form-control">
    <label for="Pesan">Pesan</label>
    <textarea class="form-control" id="Pesan" name="Pesan"></textarea>
    <button class="btn btn-primary btn-sm shadow-none" type="submit">Kirim Pesan</button>
</form>
@endsection