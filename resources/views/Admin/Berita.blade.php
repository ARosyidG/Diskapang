@extends('/Admin/ControlPanelMain')
<style>
    #tool{
        display: none;    
    }
    @media only screen and (min-width: 768px) {
        #Berita:hover #tool{
            display: block;
        }
    }
</style>
@section('Main')
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon"><i class="bi bi-search"></i></span>
        <button class="btn btn-primary">
            <i class="bi bi-funnel-fill"></i>
            <i>Filter</i>
        </button>
    </div>
    
    <div class="pb-3"><small><i>Cari Berita</i></small></div>
    {{-- {{  }} --}}
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <ul class="list-group list-group flex-column mb-auto">
        <li class="list-group-item p-1 bg-warning text-white">Daftar Berita</li>
        <a href="/Admin/Berita/create" class="btn">
            <li class="list-group-item p-1">
                <div class="p-2">
                    <i class="bi bi-plus " style="font-size: 30px;"></i>
                    <h2 class="d-inline">Tambah Berita</h2>
                </div>
            </li>
        </a>
        @foreach ($berita as $post)
            <li id="Berita" class="list-group-item p-1 px-3" >
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="bi bi-file-post" style="font-size: 30px;"></i>
                    </div>
                    <div class="col">
                        <h2>
                            <a href="/Admin/Berita/{{ $post->id }}/edit" class="text-decoration-none text-dark">
                                {{ $post->Judul }}
                            </a>
                        </h2>
                        @if ($post->Publish_at !== null)
                            <small>
                                Publish at : {{$post->Publish_at}}
                            </small>
                        @else
                            <i class="text-danger">Draf</i>
                        @endif
                        {{-- @dd($post->Publish_at) --}}
                        
                    </div>
                    <div id="tool" class="col-auto align-items-center justify-content-center">
                        <form class="d-inline" action="/Admin/Berita/{{ $post->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-white" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i></button>
                        </form>
                        <a href="/Admin/Berita/{{ $post->id }}/edit"><button class="btn btn-white"><i class="bi-pen" style="font-size: 20px;"></i></button></a>
                        <a href="/Berita/{{ $post->Slug }}"><button class="btn btn-white"><i class="bi-eye" style="font-size: 20px;"></i></button></a>
                    </div>
                    <div id="tool" class="col-1 align-items-center justify-content-center d-block d-sm-block d-md-none">
                        <div class="dropdown">
                            <button class="btn btn-white" data-toggle="dropdown" id="dropdowntool" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdowntool" style="transform: translate(-100%)">
                                <form class="d-inline" action="/Admin/Berita/{{ $post->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-white" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
                                </form>

                                <a href="/Admin/Berita/{{ $post->id }}/edit"><button class="btn btn-white"><i class="bi-pen" style="font-size: 20px;"></i> edit</button></a>
                                <a href="/Berita/{{ $post->Slug }}"><button class="btn btn-white"><i class="bi-eye" style="font-size: 20px;"></i> Lihat</button></a>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
@endsection