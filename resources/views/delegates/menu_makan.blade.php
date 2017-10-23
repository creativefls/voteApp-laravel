@extends('layouts.master')

@section('title','Pilih Makanan Favoritmu!')

@section('content')
    {{-- jika kelas belum dibuka, maka arahkan ke --}}

    {{-- jika kelas sudah dibuka --}}
    {{-- check apakah user sudah memilih --}}

    {{-- jika belum memilih -> maka tampilkan list makan --}}
      @foreach ($makanan as $data)
        <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card card-user">
	            <div class="image">
	                <img src="{{ $data->foto }}" alt="{{ $data->nama }}">
	            </div>
							<!-- judul makanan & sisa porsi -->
									<p class="description" style="padding-left:2em;">
	                    <i class="ti-bookmark"></i> <strong>{{ $data->nama }}</strong>
											<br> <i class="ti-shopping-cart"></i> Sisa <strong>{{ 100-$user->sumMakanan($data->id) }} Porsi</strong> <br>
	                </p>
									<!-- selengkapnya dan order -->
									<div class="footer">
			              <hr />
			              <div class="stats">
			                  <div class="col-xs-6">
			                      <a href="{{ url('delegates/detail/makanan/'.$data->id.'')}}" class="btn btn-info btn-sm"><i class="ti-search"></i>Selengkapnya</a>
			                  </div>
                        @if ($user->sumMakanan($data->id) >= 100)
                          {{-- stock makanan sudah habis --}}
                          <div class="col-xs-6">
                            <a href="#" class="btn btn-danger btn-sm btn-fill"><i class="ti-close"></i>Stok Habis</a>
                          </div>
                        @else
                          {{-- stock makanan masih tersedia --}}
                          <div class="col-xs-6">
                            <a href="{{ url('delegates/menu-makan/'.$data->id.'')}}" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER</a>
                          </div>
                        @endif
			              </div>
			            </div>
	        </div>
	      </div>
      @endforeach
      {{-- jika sudah memilih -> maka tampilkan tiket Organisasi yang sudah dipilih --}}

@endsection
