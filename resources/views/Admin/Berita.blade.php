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
    <ul class="list-group list-group flex-column mb-auto">
        <li class="list-group-item p-1 bg-warning text-white">Daftar Berita</li>
        <li class="list-group-item p-1">
            <div class="p-2">
                <i class="bi bi-plus " style="font-size: 30px;"></i>
                <h2 class="d-inline">Tambah Berita</h2>
            </div>
        </li>
        @foreach ($berita as $post)
            <li id="Berita" class="list-group-item p-1 px-3" >
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="bi bi-file-post" style="font-size: 30px;"></i>
                    </div>
                    <div class="col">
                        <h2>
                            <a href="/Berita/{{ $post->Slug }}" class="text-decoration-none text-dark">
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
                        <button class="btn btn-white"><i class="bi-trash" style="font-size: 20px;"></i></button>
                        <button class="btn btn-white"><i class="bi-upload" style="font-size: 20px;"></i></button>
                        <button class="btn btn-white"><i class="bi-eye" style="font-size: 20px;"></i></button>
                    </div>
                    <div id="tool" class="col-1 align-items-center justify-content-center d-block d-sm-block d-md-none">
                        <div class="dropdown">
                            <button class="btn btn-white" data-toggle="dropdown" id="dropdowntool" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdowntool" style="transform: translate(-100%)">
                                <button class="btn btn-white"><i class="bi-trash" style="font-size: 20px;"></i> Hapus</button>
                                <button class="btn btn-white"><i class="bi-upload" style="font-size: 20px;"></i> Publish</button>
                                <button class="btn btn-white"><i class="bi-eye" style="font-size: 20px;"></i> Lihat</button>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection