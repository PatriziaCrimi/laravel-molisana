<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="{{asset('img/favicon.png')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div id="page-wrapper">
      {{-- Header --}}
      <header>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="logo-header text-center">
                <img src="{{asset('img/la-molisana-logo.png')}}" alt="La Molisana logo">
              </div>
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
                    <a href="{{route('products-page')}}">Prodotti</a>
                  </li>
                  <li>
                    <a href="{{route('news-page')}}">News</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>  {{-- Closing Header container --}}
      </header>
      {{-- Main --}}
      <main>
        @yield('section')
      </main>
      {{-- Footer --}}
      <footer>
        <div class="container">
          <div class="row">
            <div class="col">
              prova footer
            </div>
          </div>
        </div>
      </footer>
    </div>  {{-- Closing page-wrapper --}}
  </body>
</html>
