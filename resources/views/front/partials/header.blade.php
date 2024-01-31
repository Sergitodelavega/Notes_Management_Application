<nav class="navbar navbar-expand-lg navbar-light py-3 px-5 bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="javascript:void(0)">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
        </ul>
        <div>
          @guest
            {{-- <a href="{{ route('register') }}" class="btn rounded-pill me-2 btn-outline-warning">S'inscrire</a> --}}
            <a href="{{ route('login') }}" class="btn rounded-pill me-2 btn-warning">Se connecter</a>
          @else
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="btn rounded-pill me-2 btn-warning"
            onclick="document.getElementById('logout').submit();">Logout</a>
            @csrf
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>