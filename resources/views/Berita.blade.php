@extends('main')

@section('Main')
    @foreach ($berita as $post)
        <h2>
            <a href="/Berita/{{ $post->Slug }}" class="">
                {{ $post->Judul }}
            </a>
        </h2>
        <article>
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection