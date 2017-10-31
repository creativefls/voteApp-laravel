@extends('layouts.master')

@section('title','Komunitas '.$komunitas->nama)

@section('content')
  <div class="container-fluid">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">{{ $komunitas->nama }}</h4>
          <p class="category"><i class="ti ti-time"></i> Updated at {{ $komunitas->updated_at->diffForHumans() }}</p>
        </div>
        <hr>
        <div class="content">
          <figure>
            <center>
              <img class="img-responsive" src="{{ $komunitas->gambar_logo }}" alt="{{ $komunitas->nama }}">
            </center>
            <figcaption class="text-center">{{ $komunitas->nama }}</figcaption>
          </figure>
          <hr>
          <p class="description text-left" style="padding:1.2em;">
            {!! $komunitas->deskripsi !!}
          </p>

          <div class="text-center">
            <a href="{{ url('/delegates/vote-organisasi') }}" class="btn btn-warning btn-sm btn-fill"><i class="ti-search"></i> Lainya</a>
            <a href="{{ url('/') }}" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

@endsection
