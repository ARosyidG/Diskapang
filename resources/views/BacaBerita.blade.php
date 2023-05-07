@extends('main')
@section('Main')
<style>
@media only screen and (min-width: 768px){
    #post{
        flex: 0 0 75%;
    }
}
</style>
    
    <div class="d-flex flex-wrap flex-md-nowrap">
        <div id="post" class="" style="">
            <div class="overflow-hidden" style="height:300px;">
                <img src="{{ $berita->Gambar }}" alt="" style="width: 100%;">
            </div>
            <h1 class="w-100" style="border-bottom: solid 4px black">
                {{ $berita->Judul }}
                
            </h1>
            <div>
                {!! $berita->isi !!}
            </div>
            <div class="container mt-5">
                <h3 class="w-100" style="border-bottom: solid 4px black">
                    Comment
                </h3>
                <div class="d-flex justify-content-center row">
                    <div class="col-md">
                        <div class="d-flex flex-column comment-section">
                            @foreach ($berita->comment as $c)
                                
                            <div class="bg-white p-2 border border-2">
                                <div class="d-flex flex-row user-info">
                                    <div class="d-flex flex-column justify-content-start ml-2"><b class="d-block font-weight-bold name">{{ $c->Name }}</b><span class="date text-black-50">{{ $c->created_at }}</span></div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">{{ $c->comment }}</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="bg-light p-2">
                                <div class="d-flex flex-row align-items-start">
                                    <form action="/comment/store" method="post" class="" style="width:100%">
                                        @csrf
                                        <label for="Name">Nama</label>
                                        <input type="text" name="Name" id="Name" class="form-control">
                                        <input type="hidden" name="Berita_id" id="Berita_id" class="form-control" value="{{ $berita->id }}">
                                        <label for="Email"> E-mail</label>
                                        <input type="text" name="Email" id="Email" class="form-control">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" id="comment" name="comment"></textarea>
                                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                    </form>
                                </div>
                            </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="d-flex flex-wrap ps-3 ">
            <h3 class="w-100" style="border-bottom: solid 4px black">
                Rekomendasi Berita
            </h3>
            @foreach ($recomend as $r)
            <div class="card m-2 overflow-hidden" style="height:400px">
                <img class="card-img-top" src="/{{ $r->Gambar }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <h2>
                        <a href="/Berita/{{ $r->Slug }}" class="">
                            {{ $r->Judul }}
                        </a>
                    </h2>
                    <article>
                        {{ $r->excerpt }}
                    </article>
                  </p>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection