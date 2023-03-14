<header>
  <div class="container-fluid">
  <nav id="nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand tx-s" href="{{route('homepage')}}">ONLY MY STYLE</a>
      <button id="navbar-toggler-open" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title tx-s" id="offcanvasDarkNavbarLabel">ONLY MY STYLE</h5>
          <button id="nav-btn-close" type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 px-5">
            <li class="nav-item">
              <li class="nav-item dropdown text-center ">
                <a class="nav-link dropdown-toggle tx-m " href="#" data-bs-toggle="dropdown" aria-expanded="false">Servizi</a>
                <ul class="dropdown-menu bg-dark border-white text-center">
                  <li><a class="dropdown-item tx-m" href="{{route('course.index')}}">Only My...<span class="tx-m"> Academy </span></a></li>
                  <li><a class="dropdown-item tx-m" href="#">Only My...<span class="tx-m"> Products </span></a></li>
                  <li><a class="dropdown-item tx-m" href="#">Only My...<span class="tx-m"> Prices </span></a></li>
                </ul>
              </li>
              <li>
                <a class="nav-link tx-m text-center" href="/">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tx-m text-center" href="#">Il Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tx-m text-center" href="{{route('contact_us')}}">Contattaci</a>
              </li>
              <div class="dropdown-center text-center">
                @auth
                  <button class="btn btnPrenota2 dropdown-toggle tx-m"type="button" data-bs-toggle="dropdown"aria-expanded="false">
                    Benvenuto {{Auth::user()->name}}
                  </button>
                  <ul class="dropdown-menu w-50 bg-dark border-white text-center mx-auto">
                    <li><a class="dropdown-item tx-m" href="#">Profilo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item tx-m" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                    <form action="{{route('logout')}}" method="POST" id="form-logout"class="d-none">@csrf</form>
                @else

                  <button class="btn btnPrenota2 dropdown-toggle tx-m"type="button" data-bs-toggle="dropdown"aria-expanded="false">
                    Accedi | Registrati
                  </button>
                  <ul class="dropdown-menu w-50 bg-dark border-white text-center mx-auto">
                    <li><a class="dropdown-item tx-m" href="{{route('login')}}">Accedi</a></li>
                    <li><a class="dropdown-item tx-m" href="{{route('register')}}">Registrati</a><li>
                  </ul>
                @endauth
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
 </header>