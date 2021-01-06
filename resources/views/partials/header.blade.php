<header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="logo text-center" href="{{url('/')}}">
          <img src="{{asset('img/la-molisana-logo.png')}}" alt="La Molisana logo">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        {{-- Navbar --}}
        <nav>
          <ul class="nav-menu text-center">
            <li>
              <a class="{{Request::route()->getName() === 'homepage' ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
            <li>
              <a class="{{Request::route()->getName() === 'products' ? 'active' : ''}}" href="{{route('products')}}">Prodotti</a>
            </li>
            <li>
              <a class="{{Request::route()->getName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">News</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>  {{-- Closing Header container --}}
</header>
