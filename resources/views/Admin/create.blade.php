@extends('Admin.ControlPanelMain')
@section('Main')
    <form action="/Admin/Berita" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Judul">Judul</label>
            <input type="text" class="form-control" id="Judul" name="Judul" required autofocus value="{{ old('Judul') }}">
            <small id="smallSlug"></small>
            @error('Judul')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="Gambar">Gambar</label>
            <input type="file" class="form-control" id="Gambar" name="Gambar">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="Slug" name="Slug" value="{{ old('Slug') }}">
            <input type="hidden" class="form-control" id="isPublish" name="isPublish" value=false>
        </div>
        
        <div class="form-group mt-3">
            <label for="isi">Article</label>
            {{-- <input type="hidden" name="isi" id="isi"> --}}
            <textarea id="textisi" name="isi"></textarea>
            @error('isi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-primary mt-3" type="submit">Save</button>
        <button class="btn btn-primary mt-3" type="submit" onclick="Publish()">Publish</button>
    </form>
    <script src="/_js/create.js"></script>
@endsection