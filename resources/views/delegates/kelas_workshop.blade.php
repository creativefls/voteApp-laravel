@extends('layouts.master')

@section('title','Pilih kelas yang kamu sukai!')

@section('content')
  {{-- menampilkan list dari kelas workshop --}}
  @foreach ($workshop as $data)
    <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	            <div class="footer">
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-12">
                      <strong><i class="ti-blackboard"></i> Kelas {{ $data->nama_kelas}}</strong><br>
                      <strong><i class="ti-user"></i> Sisa 49 Kursi</strong> <br>
                       <blockquote><p>{{ $data->deskripsi}}</p></blockquote>
	                  </div>
	                    {{-- <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div> --}}
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-12">
	                        <a href="{{ url('delegates/kelas-workshop/'.$data->id.'')}}" class="btn btn-info btn-xs btn-fill btn-wd btn-block"><i class="ti-hand-stop"></i> GABUNG</a>
	                      </div>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
  @endforeach
@endsection
