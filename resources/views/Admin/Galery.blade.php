@extends('Admin.ControlPanelMain')
@section('Main')
<ul class="list-group list-group flex-column mb-auto" >
    <li class="list-group-item p-1 bg-warning text-white">Form Publikasi</li>
    <li id="Berita" class="list-group-item p-1 px-3" >
    <form action="/Admin/Galeri" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Caption">Caption</label>
            <input type="text" name="Caption" id="Caption" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Gambar</label>
            <input type="file" name="name" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3"> Tambah</button>
    </form>
</li>
</ul>
<div class="d-flex flex-wrap justify-content-center">
    @foreach ($Gambar as $G)
    <div class="card m-3 p-2 " style="flex: 0 0 25%;">
        <img class="card-img-top" src="/{{ $G->name }}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{ $G->Caption }}</p>
        </div>
        <form class="d-inline" action="/Admin/Galeri/{{ $G->id }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
        </form>
    </div>
    @endforeach
</div>
@endsection