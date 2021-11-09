<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      {{-- Header Logo --}}
      <div class="logo">
        <img class="img-fluid" src="{{ asset('img/manga_logo.png') }}" alt="Manga-art Logo">
      </div>
     
      <div class="collapse navbar-collapse" id="navbarNav">

        {{-- Header Navbar --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("comics.index")}}">Our Mangas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("comics.create")}}">Propose your Manga</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>