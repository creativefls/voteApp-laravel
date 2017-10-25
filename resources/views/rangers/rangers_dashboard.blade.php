@extends('layouts.master')

@section('title','Rangers')

@section('content')
  <div class="container-fluid">
    <div class="row">
        {{-- informasi kelas workshop --}}
        <div class="col-md-4 col-sm-6">
          <div class="card card-user">
              <div class="image">
                  <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="#DaretoCreate">
              </div>
                  <div class="author">
                      <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29959371-2acadc44-8f21-11e7-9f87-659f1a6f8387.png" alt="Kabar Kelas Workshop">
                    <h4 class="title">Info Kelas Workshop<br>
                    </h4><hr>
                  </div>
        					<p class="description text-left" style="padding:0.3em 2em 0.3em 2em;">
                    <i class="ti-user"></i> <strong>240</strong> total Delegates. <br>
                      <i class="ti-check-box"></i> <strong>{{ $user->totalPemilihKelas() }}</strong> Delegates sudah menvote. <br>
        							<i class="ti-info-alt"></i> <strong>{{ 240-$user->totalPemilihKelas() }}</strong> Delegates belum menvote.
                  </p>
                {{-- link selengkapnya --}}
                <div class="text-center">
                  <a href="{{ url('rangers/kelas-workshop') }}" class="btn btn-primary btn-sm btn-fill" style="float:right"><i class="ti-search"></i> Selengkapnya</a><br>
                </div>
          </div>
        </div>

        {{-- Informasi Voting --}}
        <div class="col-md-4 col-sm-6">
          <div class="card card-user">
              <div class="image">
                  <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="#DaretoCreate">
              </div>
                  <div class="author">
                    <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29959370-2ac6cfaa-8f21-11e7-908a-f400599369fe.png" alt="Kabar Voting">
                    <h4 class="title">Info Voting Komunitas<br>
                    </h4><hr>
                  </div>
        					<p class="description text-left" style="padding:0.3em 2em 0.3em 2em;">
                    <i class="ti-user"></i> <strong>240</strong> total Delegates. <br>
                      <i class="ti-check-box"></i> <strong>{{ $user->totalPemilihKomunitas() }}</strong> Delegates sudah menvote. <br>
        							<i class="ti-info-alt"></i> <strong>{{ 240-$user->totalPemilihKomunitas() }}</strong> Delegates belum menvote.
                  </p>
                  {{-- link selengkapnya --}}
                  <div class="text-center">
                    <a href="{{ url('rangers/hasil-voting') }}" class="btn btn-primary btn-sm btn-fill" style="float:right"><i class="ti-search"></i> Selengkapnya</a><br>
                  </div>
          </div>
        </div>

        {{-- Informasi makanan --}}
        <div class="col-md-4 col-sm-6">
          <div class="card card-user">
              <div class="image">
                  <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="#DaretoCreate">
              </div>
                  <div class="author">
                    <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/30063933-798eca0a-927a-11e7-8fe6-8cea0eea64cc.png" alt="Kabar Makan">
                    <h4 class="title">Info Makanan<br>
                    </h4><hr>
                  </div>
        					<p class="description text-left" style="padding:0.3em 2em 0.3em 2em;">
                    <i class="ti-user"></i> <strong>240</strong> total Delegates. <br>
                      <i class="ti-check-box"></i> <strong>{{ $user->totalPemilihMakan() }}</strong> Delegates sudah memilih. <br>
        							<i class="ti-info-alt"></i> <strong>{{ 240-$user->totalPemilihMakan() }}</strong> Delegates belum memilih.
                  </p>
                  {{-- link selengkapnya --}}
                  <div class="text-center">
                    <a href="{{ url('rangers/hasil-voting') }}" class="btn btn-primary btn-sm btn-fill" style="float:right"><i class="ti-search"></i> Selengkapnya</a><br>
                  </div>
          </div>
        </div>
    </div>
</div>

@endsection
