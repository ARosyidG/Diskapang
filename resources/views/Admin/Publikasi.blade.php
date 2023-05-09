@extends('Admin.ControlPanelMain')
@section('Main')

<a href="/Admin/Publikasi/create"><button class="btn btn-primary">+ Tambah</button></a>
<div class="collapse" id="addForm">

</div>
<ul class="list-group list-group flex-column mb-auto mt-3">
<li class="list-group-item p-1 bg-warning text-white">File</li>
<li id="Berita" class="list-group-item p-1 px-3" >
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nama File</th>
        <th scope="col">Jenis File</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($File as $f)
            <tr>
                <td><a href="/{{ $f->path }}">{{ $f->Name }}</a></td>
                <td>{{ $f->Category }}</td>
                <td class="text-end">
                    <form class="d-inline" action="/Admin/Publikasi/{{ $f->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</li>
</ul>
@if ($Pengumuman)
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-warning text-white">Pengumuman</li>
    <li id="Berita" class="list-group-item p-1 px-3" >
        <table class="table">
            <thead>
                <th scope="col">Pengumuman</th>
                <thead scope="col"></th>
            </thead>
            <tbody>
                    @foreach ($Pengumuman as $p)
                    <tr>

                        <td>{{ $p->isipengumuman }}</td>
                        <td class="text-end">
                            <form class="d-inline" action="/Admin/Publikasi/Pengumuman/{{ $p->id }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
    </li>
</ul>
@endif

@if ($Agenda)
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-warning text-white">Agenda</li>
    <li id="Berita" class="list-group-item p-1 px-3" >
        @foreach ($Agenda as $a)
        <table class="table">
            <thead>
                <th scope="col">Agenda</th>
                <th scope="col">Pelaksanaan</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <td>{{ $a->Name }}</td>
                <td>{{ $a->Pelaksanaan }}</td>
                <td class="text-end">
                    <form class="d-inline" action="/Admin/Publikasi/Agenda/{{ $a->id }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
                    </form>
                </td>
            </tbody>
        </table>
        @endforeach
    </li>
</ul>
@endif

@endsection
