@extends('Admin.ControlPanelMain')
@section('Main')
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-warning text-white">Daftar Pesan</li>
    <li id="Berita" class="list-group-item p-1 px-3" >
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Subjek</th>
            <th scope="col">Pesan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Kontak as $f)
                <tr>
                    <td>{{ $f->Name }}</td>
                    <td>{{ $f->Email }}</td>
                    <td>{{ $f->Subjek }}</td>
                    <td>
                        {{ $f->Pesan }}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </li>
    </ul>
@endsection