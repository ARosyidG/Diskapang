@extends('Admin.ControlPanelMain')
@section('Main')
    <ul class="list-group list-group flex-column mb-auto">
        <li class="list-group-item p-1 bg-warning text-white">Form Publikasi</li>
        <li id="Berita" class="list-group-item p-1 px-3" >
            <style>
                .form-group{
                    margin-top: 5px;
                    margin-bottom: 5px;
                }
            </style>
            <form action="/Admin/Publikasi" method="post" enctype="multipart/form-data">
                @csrf
                @if(!auth()->check() || auth()->user()->role === 'PPID')
                    <div class="form-group">
                        <label for="Category">Jenis Dokumen</label>
                        <select name="Category" class="form-control" id="jenis">
                            <option value="-.-">-.-</option>
                            {{-- <option value="karya-Ilmiah">karya Ilmiah</option> --}}
                            <option value="Informasi-Setiap-Saat">Informasi Setiap Saat</option>
                            <option value="Informasi-Berkala">Informasi Berkala</option>
                            <option value="Informasi-Serta-Merta">Informasi Serta Merta</option>
                            {{-- <option value="Pengumuman">Pengumuman</option>
                            <option value="Agenda">Agenda</option> --}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Name">Nama FIle</label>
                        <input type="text" name="Name" class="form-control" id="Name" placeholder="Nama File">
                    </div>
                    <div class="form-group">
                        <label for="File">File :</label>
                        <input class="form-control" name="File" id="File" type="file">
                    </div>
                    <div class="form-group">
                        <label for="Tahun">Tahun</label>
                        <input type="text" name="Tahun" class="form-control" id="Tahun" placeholder="Tahun">
                    </div>
                        {{-- <input type="password" name="Category" class="form-control" id="Category"> --}}

                @elseif (!auth()->check() || auth()->user()->role === 'Admin')
                <div class="form-group">
                    <label for="Category">Kategori</label>
                    <select name="Category" class="form-control" id="Category">
                        <option value="-.-">-.-</option>
                        <option value="karya-Ilmiah">karya Ilmiah</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Agenda">Agenda</option>
                    </select>
                </div>
                <div id="pilihan">

                </div>
                
                    
                @endif
                <button class="btn btn-primary w-100 mt-3" type="submit">Upload</button>
            </form>
        </li>
    </ul>
    <div id="Pengumuman" hidden>
        <div class="form-group">
            <label for="Name">Isi Pengumuman</label>
            <input type="text" class="form-control" name="isipengumuman" id="isipengumuman" cols="30" rows="10">
        </div>
    </div>
    <div id="karya-Ilmiah" hidden>
        <div class="form-group">
            <label for="Name">Nama Karya Ilmiah</label>
            <input type="text" name="Name" class="form-control" id="Name" placeholder="Nama File">
        </div>
        <div class="form-group">
            <label for="File">File :</label>
            <input class="form-control" name="File" id="File" type="file">
        </div>
        <div class="form-group">
            <label for="Tahun">Tahun</label>
            <input type="text" name="Tahun" class="form-control" id="Tahun" placeholder="Tahun">
        </div>
    </div>
    <div id="Agenda" hidden>
        <div class="form-group">
            <label for="Name">Agenda</label>
            <input type="text" name="Name" class="form-control" id="Name" placeholder="Nama Agenda">
        </div>
        <div class="form-group">
            <label for="Pelaksanaan">Tanggal Pelaksanaan</label>
            <input type="text" name="Pelaksanaan" class="form-control" id="Pelaksanaan" placeholder="Tanggal Pelaksanaan">
        </div>
    </div>
    <script src="/_js/Publikasi.js"></script>

@endsection