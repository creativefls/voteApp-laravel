@extends('layouts.master')

@section('title','Buka-Tutup Fitur')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  <div class="col-lg-4 col-md-4 col-sm-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Buka-Tutup Fitur</h4>
			</div>
			<div class="content">
				<ul class="list-unstyled team-members">
          <hr>
          {{-- list kelas workshop --}}
          @foreach ($fitur as $data)
            <li>
							<div class="row">
                <div class="col-xs-3">
									<div class="avatar">
										<img src="https://user-images.githubusercontent.com/10141928/29752964-f91742ba-8b91-11e7-9181-9e9c8a5f2076.png" alt="{{ $data->deskripsi }}" class="img-circle img-no-padding img-responsive">
									</div>
								</div>
                  @if ($data->is_buka == 0)
                    {{-- jika kelas masih tertutup --}}
                    @php $set_buka = 1 @endphp
                    <div class="col-xs-5">
                      {{ $data->deskripsi }}<br>
                      <span class="text-danger"><small><i class="ti-tag"></i> {{ $data->kode_fitur }}</small></span><br>
                      <span class="text-danger"><small><i class="ti-na"></i> Kelas Tutup</small></span>
                    </div>
                    <div class="col-xs-3 text-right">
      									<a href="" onclick="event.preventDefault(); document.getElementById('fitur-{{ $data->id }}').submit();" class="btn btn-xs btn-success btn-icon btn-fill"><i class="ti-unlock"></i> Buka</a>
      							</div>
                  @elseif ($data->is_buka == 1)
                    {{-- jika kelas sudah terbuka --}}
                    @php $set_buka = 0 @endphp
                    <div class="col-xs-5">
                      {{ $data->deskripsi }}<br>
                      <span class="text-success"><small><i class="ti-tag"></i> {{ $data->kode_fitur }}</small></span><br>
                      <span class="text-success"><small><i class="ti-check"></i> Kelas terbuka</small></span>
                    </div>
                    <div class="col-xs-3 text-right">
      									<a href="" onclick="event.preventDefault(); document.getElementById('fitur-{{ $data->id }}').submit();" class="btn btn-xs btn-danger btn-icon"><i class="ti-lock"></i> Tutup</a>
      								</div>
                  @endif
                </div>
						</li>
            {{-- form post --}}
            <form id="fitur-{{ $data->id }}" action="{{ url('rangers/buka-tutup-fitur') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="fitur_id" value="{{ $data->id }}">
                <input type="hidden" name="is_buka" value="{{ $set_buka }}">
            </form>
          @endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
