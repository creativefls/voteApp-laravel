@extends('layouts.master')

@section('title','Komunitas '.$makanan->nama)

@section('content')
  <div class="container-fluid">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">{{ $makanan->nama }}</h4>
          <p class="category"><i class="ti ti-time"></i> Updated at {{ $makanan->updated_at->diffForHumans() }}</p>
        </div>
        <hr>
        <div class="content">
          <figure>
            <center>
              <img class="img-responsive" src="{{ $makanan->foto }}" alt="{{ $makanan->nama }}">
            </center>
            <figcaption class="text-center">{{ $makanan->nama }}</figcaption>
          </figure>
          <hr>
          <p class="description text-left" style="padding:1.2em;">
            {!! $makanan->deskripsi !!}
          </p>

          <div class="text-center">
            <a href="{{ url('/delegates/menu-makan') }}" class="btn btn-warning btn-sm btn-fill"><i class="ti-search"></i> Lainya</a>
            <a href="{{ url('/') }}" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER</a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

@endsection
