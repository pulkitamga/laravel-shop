<link rel="stylesheet" href="{{URL::asset('css/global.css')}}"/> 
<nav class="navbar navbar-light navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand me-5" href="#">
            <h3 class="fw-bold text-dark">La<span class="text-primary">ravel 
                </span>Sh<span class="text-primary">op</span></h3></a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav m-auto">
                <li class="nav-item mx-2"><a href=""class="nav-link fw-bold active" aria-current="page">Home</a></li>
                <li class="nav-item mx-2"><a href="" class="nav-link fw-bold ">About</a></li>
                <li class="nav-item mx-2"><a href=""class="nav-link fw-bold ">Services</a></li>
                <li class="nav-items mx-2"><a href="" class="nav-link fw-bold ">Products</a></li>
                @if(Session::get('loginId'))
                <li class="nav-items mx-2"><a href="/logout" class="nav-link fw-bold ">Logout</a></li>
                @else
                <li class="nav-items mx-2"><a href="/login" class="nav-link fw-bold ">Login</a></li>
                <li class="nav-items mx-2"><a href="/register" class="nav-link fw-bold ">Register</a></li>
                @endif
            </ul> 
           <div>
            <a href="/register"><i class="fa-sharp fa-solid fa-beat fa-user fa-lg mx-2" style="color:#ea6438;"></i></a>
            <i class="fa-solid fa-cart-shopping fa-beat fa-lg mx-2" style="color:#ea6438;"></i>
            <i class="fa-solid fa-gift fa-beat fa-lg mx-2" style="color:#ea6438;"></i>
           </div>
         
        </div>
    </div>

</nav>
  {{-- <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
    <div class="container">
      <img src="https://mdbootstrap.com/img/Photos/new-templates/animal-shelter/logo.png" height="70" alt=""
        loading="lazy" />
      
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#pets">Pets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#adoptions">Adoptions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#foundation">Foundation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#help">How can I help?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">Contact</a>
          </li>
        </ul>
  
        <ul class="navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link px-2" href="#!">
              <i class="fab fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2" href="#!">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
  