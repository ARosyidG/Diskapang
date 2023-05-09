<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Fjalla+One);
        /* body{
            margin: 0 5px 0 5px;
        } */
        h2, h1, h3{
            font-family: 'Fjalla One', sans-serif;
            text-transform: uppercase;
        }
        h2 {
            text-decoration-color: #c7ad07;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-lg position-fixed" style="background-color: rgb(58, 52, 44); top:0; left:0; right:0; z-index : 100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/" class="navbar-brand"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Coat_of_arms_of_West_Nusa_Tenggara.svg" alt="" class="ps-2" style="height: 50px">DISKAPANG</a>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Sejarah">Sejarah</a>
                    <a class="dropdown-item" href="/tugasdanfungsi">Tugas Dan Fungsi</a>
                    <a class="dropdown-item" href="/VisiMisi">Visi Misi</a>
                    <a class="dropdown-item" href="/StrukturOrganisasi">Struktur Organisasi</a>
                    <a class="dropdown-item" href="/DataPegawai">Data Pegawai</a>
                    <a class="dropdown-item" href="/Kelembagaan">Kelembagaan</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/Program">Program</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Kontak">Kontak</a>
                    <a class="dropdown-item" href="Layanan">Layanan Publik</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/Publikasi">Publikasi</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#">Site Map</a></li> --}}
            </ul>
            <form class="ms-auto mb-0" style="display: inline-flex;">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class=" text-center bg-image rounded-3" style="height: auto; width:100%; margin-top:70px">
        <img src="https://diskapang.ntbprov.go.id/po-content/uploads/banner.jpg" style="width: 100%">
    </div>
    <main class="p-3 mx-md-5 border">
        @yield('Main')
    </main>
    <div class="row w-100 p-3 bg-dark text-light mt-5">
        <div class="col">
            <h2 style="border-bottom: solid white">
                Media Sosial
            </h2>
            <div><img src="/Gambar/whatsapp.png" style="width:25px; height:25px" class="" alt=""> 0370-623935</div>
            <div><img src="/Gambar/instagram.png" style="width:25px; height:25px" class="" alt=""> Diskapang-NTB</div>
            <div><img src="/Gambar/facebook.png" style="width:25px; height:25px" class="" alt=""> Diskapang-NTB</div>
            <div><img src="/Gambar/gmail.png" style="width:25px; height:25px" class="" alt=""> diskapang@ntbprov.go.id</div>
            <br>
            <h2 style="border-bottom: solid white">
                Kontak
            </h2>
            <p>Phone: 0370-623935</p>
            <p>Fax: 0370-636005</p>
            <p>Email: diskapang@ntbprov.go.id</p>
        </div>
        <div class="col">
            <h2 style="border-bottom: solid white">
                Lokasi
            </h2>
            <div class="mapouter">
                <style>
                    .mapouter{position:relative;
                        text-align:right;
                        width:100%;
                        height:400px;
                    }
                    .gmap_canvas {
                        overflow:hidden;
                        background:none!important;
                        width:100%;
                        height:400px;
                    }
                    .gmap_iframe {
                        height:400px!important;
                    }
                    </style>
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=C36R+W6W, Jl. Majapahit, Dasan Agung Baru, Kec. Selaparang, Kota Mataram, Nusa Tenggara&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                    <a href="https://capcuttemplate.org/">Capcuttemplate.org</a>
                </div>
                    
                </div>
        </div>
        <div class="col" >
            <h2 style="border-bottom: solid white">
                Link
            </h2>
            <div class="row">
                <div class="col">
                    <div><a href="">Berita</a></div>
                    <div><a href="">Sejarah</a></div>
                    <div><a href="">Tugas dan Fungsi</a></div>
                    <div><a href="">Visi Misi</a></div>
                    <div><a href="">Struktur Organisasi</a></div>
                </div>
                <div class="col">
                    <div><a href="">Data Pegawai</a></div>
                    <div><a href="">Kelembagaan</a></div>
                    <div><a href="">Program</a></div>
                    <div><a href="">Kontak</a></div>
                    <div><a href="">Layanan</a></div>
                    <div><a href="">Publikasi</a></div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
