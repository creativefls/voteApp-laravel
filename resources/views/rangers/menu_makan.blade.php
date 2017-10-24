@extends('layouts.master')

@section('title','Informasi Menu Makan')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Daftar Menu Makan</h4>
			</div>
			<div class="content">
				<ul class="list-unstyled team-members">
          {{-- list kelas workshop --}}
          @foreach ($makanan as $data)
            <li>
							<div class="row">
                <div class="col-xs-3">
									<div class="">
										<img src="{{ $data->foto }}" alt="{{ $data->nama }}" class="img-no-padding img-responsive">
									</div>
								</div>
								<div class="col-xs-8">
                  {{ $data->nama }}
									<br>
                    <span class="text-success">
                      <small><i class="ti-shopping-cart"></i> Masih tersisa {{ 100-$user->sumKelas($data->id) }} porsi </small> <br>
                      <small><i class="ti-user"></i> {{ $user->sumKelas($data->id) }} delegates pesan ini</small>
                    </span>
                </div>
							</div>
						</li>
          @endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
