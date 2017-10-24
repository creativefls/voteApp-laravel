@extends('layouts.master')

@section('title','Informasi Kelas Workshop')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Daftar Kelas Workshop</h4>
			</div>
			<div class="content">
				<ul class="list-unstyled team-members">
          {{-- list kelas workshop --}}
          @foreach ($kelas as $data)
            <li>
							<div class="row">
                <div class="col-xs-3">
									<div class="avatar">
										<img src="{{ $data->gambar_logo }}" alt="{{ $data->nama_kelas }}" class="img-circle img-no-padding img-responsive">
									</div>
								</div>
								<div class="col-xs-8">
                  {{ $data->nama_kelas }}
									<br>
                    <span class="text-success">
                      <small><i class="ti-location-pin"></i>{{ $data->ruang_kelas }} </small> |
                      <small><i class="ti-user"></i> {{ $user->sumKelas($data->id) }} peserta</small>
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
