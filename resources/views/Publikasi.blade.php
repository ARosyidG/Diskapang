@extends('Main')
@section('Main')

<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-warning text-white">File</li>
    <li id="Berita" class="list-group-item p-1 px-3" >
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama File</th>
            <th scope="col">Jenis File</th>
            <th scope="col">Tahun</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($File as $f)
                <tr>
                    <td><a href="/{{ $f->path }}">{{ $f->Name }}</a></td>
                    <td>{{ $f->Category }}</td>
                    <td>{{ $f->Tahun }}</td>
                    <td>
                        <a href="/{{ $f->path }}"><button class="btn btn-success">Download</button></a>
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
                    <thead scope="col"> <th>
                        Pengumuman
                    </th>
                </thead>
                </thead>
                <tbody>
                    @foreach ($Pengumuman as $p)
                    <tr>
                        <td>{{ $p->isipengumuman }}</td>
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
                </thead>
                <tbody>
                    <td>{{ $a->Name }}</td>
                    <td>{{ $a->Pelaksanaan }}</td>
                </tbody>
            </table>
            @endforeach
        </li>
    </ul>
    @endif
@endsection