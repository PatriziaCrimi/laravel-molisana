@extends('layouts.app')

@section('page-title', 'I prodotti | La Molisana')

@section('section')
  <section id="products">
    <div class="container">
      @foreach ($types_list as $type => $pasta)
        <div class="row">
          <div class="col-12">
            <h2>Le {{$type}}</h2>
          </div>
        </div>
        <div class="pasta-cards-wrapper">
          <div class="row">
            @foreach ($pasta as $key => $pasta_type)
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="pasta-card">
                  <img src="{{ $pasta_type['src'] }}" alt="{{ $pasta_type['titolo'] }}">
                  {{-- Overlay --}}
                  <div class="overlay">
                    <a href="{{route('product-info', ['id' => $key])}}" class="d-flex justify-content-center align-items-center">
                      {{ $pasta_type['titolo'] }}
                    </a>
                  </div> {{-- Closing Overlay --}}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>   {{-- Closing Section-Products container --}}
  </section>
@endsection
