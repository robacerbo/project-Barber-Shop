<header>
  <div class="container">
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
              <li class="nav-item dropdown text-center">
                <a class="nav-link dropdown-toggle tx-m" href="#" data-bs-toggle="dropdown" aria-expanded="false">Servizi</a>
                <ul class="dropdown-menu bg-dark">
                  <li><a class="dropdown-item tx-m" href="{{route('course.create')}}">Only My...<span class="tx-m"> Academy </span></a></li>
                  <li><a class="dropdown-item tx-m" href="#">Only My...<span class="tx-m"> Products </span></a></li>
                  <li><a class="dropdown-item tx-m" href="#">Only My...<span class="tx-m"> Prices </span></a></li>
                </ul>
              </li>
            </li>
              <a class="nav-link tx-m text-center" href="/">Gallery</a>
            <li class="nav-item">
              <a class="nav-link tx-m text-center" href="#">Il Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tx-m text-center" href="{{route('contact_us')}}">Contattaci</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <button class="btn btn-light btn-sm rounded-0 tx-m btnPrenota2">Prenota Ora</button>
            </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
 </header>