@extends('Admin.ControlPanelMain')
@section('Main')
    {{-- {{ $Berita->Judul }} --}}
    <form action="/Admin/Berita/{{ $Berita->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="Judul">Judul</label>
            <input type="text" class="form-control" id="Judul" name="Judul" required autofocus value="{{ old('Judul', $Berita->Judul) }}">
            <small id="smallSlug"></small>
            @error('Judul')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="Slug" name="Slug" value="{{ old('Slug', $Berita->Slug) }}">
        </div>
        <div class="form-group mt-3">
            <div>
                <label for="Gambar">Gambar</label>
            </div>
            <div>
                <img class="border rounded p-2" src="/{{ $Berita->Gambar }}" alt="" id="imgPre" class="mt-3" style="height:200px; width:auto;">
            </div>
            <input type="file" class="form-control" id="Gambar" name="Gambar" onchange="imgPreview()">
        </div>
        <div class="form-group mt-3">
            <label for="isi">Article</label>
            {{-- <input type="hidden" name="isi" id="isi"> --}}
            <textarea id="textisi" name="isi">{{ old('isi', $Berita->isi )}}</textarea>
            @error('isi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary mt-3" type="submit">Save</button>
        <button class="btn btn-primary mt-3" type="button" id="Publish">Publish</button>
    </form>
    <script src="/_js/create.js"></script>
@endsection