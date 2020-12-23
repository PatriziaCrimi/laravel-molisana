@extends('layouts.app')

@section('page-title', $product['titolo'] . ' | La Molisana')

@section('section')
  <section id="product-info" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>{{ $product['titolo'] }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-pic">
            <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-package">
            <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }} package">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-details">
            <p>{{ $product['tipo'] }}</p>
            <p>{{ $product['cottura'] }}</p>
            <p>{{ $product['peso'] }}</p>
            <p>{{ $product['descrizione'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
