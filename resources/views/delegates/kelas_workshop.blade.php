@extends('layouts.master')

@section('title','Pilih kelas yang kamu sukai!')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  @if ($isChoosen->kelas_id == null)
    @php
      flash('Kamu hanya diberikan 1 kesempatan untuk memilih <b>kelas workshop</b>, jadi perhatikan pilihanmu.')->warning();
    @endphp
    @foreach ($workshop as $data)
      <div class="col-lg-4 col-md-4 col-sm-6">
  	     <div class="card">
  	        <div class="content">
  	          <div class="row">
  	            <div class="footer">
  	              <div class="stats">
  	                  <div class="col-xs-12">
                        <strong><i class="ti-blackboard"></i> Kelas {{ $data->nama_kelas}}</strong><br>
                        <strong><i class="ti-receipt"></i> Sisa {{ 49-$user->sumKelas($data->id) }} tiket</strong> <br>
                        <blockquote><p>{{ $data->deskripsi}}</p></blockquote>
  	                  </div>
                      @if ($user->sumKelas($data->id) >= 49)
                        {{-- kelas penuh --}}
                        <div class="col-xs-12">
                          <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
                        </div>
                      @else
                        {{-- kelas tersedia --}}
                        <div class="col-xs-12">
                          <a href="{{ url('delegates/kelas-workshop/'.$data->id.'')}}" class="btn btn-info btn-xs btn-fill btn-wd btn-block"><i class="ti-hand-stop"></i> GABUNG</a>
                        </div>
                      @endif
  	              </div>
  	            </div>
  	          </div>
  	        </div>
  	      </div>
        </div>
    @endforeach
  @else
    @include('delegates.tiket.workshop')
  @endif

@endsection
