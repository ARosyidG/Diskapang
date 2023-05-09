<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/_css/sidebars.css" rel="stylesheet">
    {{-- wysiwyg editor --}}
    <script src="https://cdn.tiny.cloud/1/2cdpn5attc8aer0jc5jvi0hbutt3z7rvw15mz0d8rdz6orqc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    {{-- <style>
      #sidebar{
        background-color: brown;
      }
    </style> --}}
    <style>
      @import url(https://fonts.googleapis.com/css?family=Fjalla+One);
      /* body{
          margin: 0 5px 0 5px;
      } */
      h2, h1, h3{
          font-family: 'Fjalla One', sans-serif;
          text-transform: uppercase;
      }
  </style>
  </head>
  <body>
    <nav class="navbar bg-warning navbar-expand-md px-2 shadow">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/Admin" class="navbar-brand me-auto">DISKAPANG</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-block d-md-none">
            <li class="nav nav-item p-1"><a href="/Admin/Berita" class="nav-link">Berita</a></li>
            <li class="nav nav-item p-1"><a href="/Admin/Publikasi" class="nav-link">Publikasi</a></li>
            <li class="nav nav-item p-1"><a href="/Admin/Galeri" class="nav-link">Galeri</a></li>
            <li class="nav nav-item p-1"><a href="/Admin/Pesan" class="nav-link">Pesan</a></li>
        </div>
      </div>
      <form action="/Admin/Logout" method="post" class="m-0">
        @csrf
        <button type="submit" class="navbar-item btn ms-auto">
          <i class="bi bi-power"> Log Out</i>
        </button>
      </form>
    </nav>
    <div id="main" class="container-fluid">
      <div class="row">
        <div id="sidebar" class="col-md-2 sidebar pt-3 d-none d-md-block d-lg-block d-xl-block shadow">
          <ul class="nav navbar-light list-group list-group-flush nav-pills flex-column mb-auto">
            <li class="list-group-item p-1"><a href="/Admin/Berita" class="nav-link">Berita</a></li>
            <li class="list-group-item p-1"><a href="/Admin/Publikasi" class="nav-link">Publikasi</a></li>
            <li class="list-group-item p-1"><a href="/Admin/Kontak" class="nav-link">Pesan</a></li>
            <li class="list-group-item p-1"><a href="/Admin/Galeri" class="nav-link">Galeri</a></li>
          </ul>
          <div></div>
        </div>
        <main class="col-lg-10 col-md-10 main pt-4 ps-3" >
          @yield('Main')
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/sidebars.js"></script>
    {{-- wysiwyg editor --}}
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ]
      });
    </script>
    
    
  </body>
</html>
