@extends('main')

@section('Main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <div class="d-md-flex flex-wrap justify-content-around">
    @foreach ($berita as $post)
    <div class="card m-2 overflow-hidden" style="flex: 0 0 30%; height:500px">
        <img class="card-img-top" src="{{ $post->Gambar }}" alt="Card image cap">
        <div class="card-body">
            <small><i class="bi bi-eye"></i> view {{ $post->view }}</small>
          <p class="card-text">
            <h2>
                <a href="/Berita/{{ $post->Slug }}" class="">
                    {{ $post->Judul }}
                </a>
            </h2>
            <article>
                {{ $post->excerpt }}
            </article>
          </p>
        </div>
      </div>
      @endforeach
    </div>
@endsection
