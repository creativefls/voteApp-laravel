@extends('layouts.master')

@section('title','Hasil Voting Komunitas')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Hasil Voting Komunitas</h4>
			</div>
			<div class="content">
        <hr>
				<ul class="list-unstyled team-members">
          {{-- list kelas workshop --}}
          @foreach ($komunitas as $data)
            <li>
							<div class="row">
                <div class="col-xs-3">
									<div class="">
										<img src="{{ $data->gambar_logo }}" alt="{{ $data->nama }}" class="img-no-padding img-responsive">
									</div>
								</div>
								<div class="col-xs-8">
                  {{ $data->nama }}
									<br>
                    <span class="text-success">
                      <small><i class="ti-user"></i> {{ $user->sumKomunitas($data->id) }} delegates memilih</small>
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
