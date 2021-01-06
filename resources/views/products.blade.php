@extends('layouts.app')

@section('page-title', 'I prodotti | La Molisana')

@section('section')
  <section id="products">
    <div class="container">
      {{-- Long pasta --}}
      <div class="row">
        <div class="col-12">
            <h2>Le lunghe</h2>
        </div>
      </div>
      <div class="pasta-cards-wrapper">
        <div class="row">
          @foreach ($pasta_list as $key => $pasta)
            @if ($pasta['tipo'] === 'lunga')
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="pasta-card">
                  <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                  {{-- Overlay --}}
                  <div class="overlay">
                    <a href="{{route('product-info', ['id' => $key])}}" class="d-flex justify-content-center align-items-center">
                      {{ $pasta['titolo'] }}
                    </a>
                  </div> {{-- Closing Overlay --}}
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
      {{-- Short pasta --}}
      <div class="row">
        <div class="col-12">
            <h2>Le corte</h2>
        </div>
      </div>
      <div class="pasta-cards-wrapper">
        <div class="row">
          @foreach ($pasta_list as $key => $pasta)
            @if ($pasta['tipo'] === 'corta')
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="pasta-card">
                  <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                  {{-- Overlay --}}
                  <div class="overlay">
                    <a href="{{route('product-info', ['id' => $key])}}" class="d-flex justify-content-center align-items-center">
                      {{ $pasta['titolo'] }}
                    </a>
                  </div> {{-- Closing Overlay --}}
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
      {{-- Very short pasta --}}
      <div class="row">
        <div class="col-12">
            <h2>Le cortissime</h2>
        </div>
      </div>
      <div class="pasta-cards-wrapper">
        <div class="row">
          @foreach ($pasta_list as $key => $pasta)
            @if ($pasta['tipo'] === 'cortissima')
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="pasta-card">
                  <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                  {{-- Overlay --}}
                  <div class="overlay">
                    <a href="{{route('product-info', ['id' => $key])}}" class="d-flex justify-content-center align-items-center">
                      {{ $pasta['titolo'] }}
                    </a>
                  </div> {{-- Closing Overlay --}}
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>   {{-- Closing Section-Products container --}}
  </section>
@endsection
