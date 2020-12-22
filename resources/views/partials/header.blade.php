<header>
  <div class="container">
    <div class="row">
      <div class="col">
        <a class="logo-header text-center" href="{{url('/')}}">
          <img src="{{asset('img/la-molisana-logo.png')}}" alt="La Molisana logo">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        {{-- Navbar --}}
        <nav>
          <ul class="nav-menu text-center">
            <li>
              <a href="{{url('/')}}">Home</a>
            </li>
            <li>
              <a href="{{route('products')}}">Prodotti</a>
            </li>
            <li>
              <a href="{{route('news')}}">News</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>  {{-- Closing Header container --}}
</header>
