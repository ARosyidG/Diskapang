@extends('Main')
{{-- https://diskapang.ntbprov.go.id/po-content/uploads/banner.jpg --}}
{{-- https://diskapang.ntbprov.go.id/po-includes/images/logo.png --}}
<style>
    @import url(https://fonts.googleapis.com/css?family=Fjalla+One);
    #AboutAndAnnouncement{
        font-family: 'Fjalla One', sans-serif;
        text-transform: uppercase;
    }
    @media only screen and (min-width: 768px){
        .card{
            width: 18rem;
        }
    }
    h2 {
        text-decoration-color: #c7ad07;
        border-bottom: solid 4px black
    }
</style>
@section('Main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <div class="row" id="AboutAndAnnouncement">
        <div class="col-md me-auto border">
            <h2 id="About" class="p-2 ">
                <span>Dinas Ketahanan Pangan</span>
            </h2>
            <p>Selamat datang di website resmi Dinas Ketahanan Pangan Provinsi Nusa Tenggara Barat. Situs ini dibangun dengan tujuan untuk mewujudkan sistem jaringan informasi yang terpadu yang memungkinkan terjadinya interaksi dengan masyarakat, atau setiap komponen/pemangku kepentingan yang peduli dengan keberlangsungan pembangunan ketahanan pangan.</p>
            <h2 id="About" class="p-2 ">
                <a href="/Berita" class="text-dark mx-2 text-decoration-none"><span>Berita</span></a>
            </h2>
            <div class="d-md-flex justify-content-around">
                @foreach ($berita as $b)
                <a href="/Berita/{{ $b->Slug }}" class="text-dark mx-2 text-decoration-none">
                <div class="card overflow-hidden " style=" height: 400px ">
                    <img src="{{ $b->Gambar }}" class="" style="max-height:200px; height:auto ">
                    <div class="card-body">
                        <small><i class="bi bi-eye"></i> view {{ $b->view }}</small>
                        <p class="card-text">
                            <h3>{{ $b->Judul }}</h3>
                            <p>{{ $b->excerpt }}</p>
                        </p>
                    </div>
                </div>
            </a>
                @endforeach
            </div>
            <div>
                <h2 id="About" class="p-2 ">
                    <span>Galeri</span>
                </h2>
                <div style="height:300px; width:100%;" class="d-flex justify-content-center">
                <div id="carouselExampleControls" style="height:300px; width:100%;" class="carousel slide rounded d-flex justify-content-center bg-dark" data-ride="carousel">
                    <div class="carousel-inner rounded" style="width: 500px">
                        <div class="carousel-item active" style="height:100%; width:auto;">
                            <span class="text-white w-100 px-3 pt-4 pb-2" style="bottom:0; z-index: 50; position: absolute; background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgb(0, 0, 0));">{{ $Galeri[0]->Caption }}</span>
                            <img class="d-block w-100 rounded" style="height:100%; width:auto;" src="{{ $Galeri[0]->name }}" alt="">
                        </div>
                        @foreach ($Galeri as $i => $b)
                            @if ($i != 0)
                            <div class="carousel-item rounded" style="height:100%; width:auto;">
                                <span class="text-white w-100 px-3 pt-4 pb-2" style="bottom:0; z-index: 50; position: absolute; background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgb(0, 0, 0));">{{ $b->Caption }}</span>
                                <img class="d-block w-100 rounded" style="height:100%; width:auto;" src="{{ $b->name }}" alt="Third slide">
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
            <div>
                <h2 class="p-2">
                    KETAHANAN PANGAN TV
                </h2>
                <iframe width="100%" height="400"src="https://www.youtube.com/embed?listType=user_uploads&list=bkpntb&autoplay=1"></iframe>
            </div>
        </div>
        <div class="col-md-4 border">
            <h2 id="Announcement" class="p-2 flex-fill" >
                <span>Pengumuman</span>
            </h2>
            @foreach ($Pengumuman as $p)
                <li>{{ $p->isipengumuman }}</li>
            @endforeach
            <h2  class="p-2 flex-fill">
                <span>Voting Kepuasan</span>
            </h2>
            <div class="border p-2">
                <p>Masukan tingkat kepuasanmu terhadap website ini :</p>
                <form action="" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sangatBaik" id="sangatBaik1" value="Sangat Baik" checked>
                        <label class="form-check-label" for="sangatBaik1">
                          Sangat Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Baik" id="Baik" value="Baik" checked>
                        <label class="form-check-label" for="Baik">
                          Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="KurangBaik" id="KurangBaik" value="KurangBaik" checked>
                        <label class="form-check-label" for="KurangBaik">
                          Kurang Baik
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-check-label" for="email">
                          E-mail
                        </label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <a href=""><button class="btn btn-primary mt-3" type="submit">Submit</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
