@extends('layouts.app')

@section('page-title', $product['titolo'] . ' | La Molisana')

@section('section')
  <section id="product-info" class="text-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>{{ $product['titolo'] }}</h1>
        </div>
      </div>
    </div>  {{-- Closing Container-fluid --}}
    {{-- Pictures --}}
    <div class="product-pic">
      <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
    </div>
    <div class="product-package">
      <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo']}} package">
    </div>
    {{-- Product Details --}}
    <div class="container">
      <div class="product-details">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="info-box">
              <i class="fas fa-2x fa-info"></i>
              <p>Formato:
                <span>{{ $product['tipo'] }}</span>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="info-box">
              <i class="far fa-2x fa-clock"></i>
              <p>Tempo di cottura:
                <span>{{ $product['cottura'] }}</span>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="info-box weight">
              <i class="fas fa-2x fa-weight-hanging"></i>
              <p>Peso:
                <span>{{ $product['peso'] }}</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Container --}}
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <p class="description text-justify">{!! $product['descrizione'] !!}</p>
        </div>
      </div>
    </div>  {{-- Closing Container-fluid --}}
    <div class="slider left">
      @if ($id > 0)
        <a href="{{route('product-info', ['id' => $id - 1])}}">
          <i class="fas fa-long-arrow-alt-left"></i>
        </a>
      @else
        <a href="{{route('product-info', ['id' => $num_products - 1])}}">
          <i class="fas fa-long-arrow-alt-left"></i>
        </a>
      @endif
    </div>
    <div class="slider right">
      @if ($id < 11)
        <a href="{{route('product-info', ['id' => $id + 1])}}">
          <i class="fas fa-long-arrow-alt-right"></i>
        </a>
      @else
        <a href="{{route('product-info', ['id' => 0])}}">
          <i class="fas fa-long-arrow-alt-right"></i>
        </a>
      @endif
    </div>
  </section>
@endsection
