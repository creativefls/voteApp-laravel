@extends('layouts.master')

@section('title','Vote Organisasi/Komunitas Pilihanmu.')

@section('content')
  {{-- informasi flashdata --}}

  {{-- jika kelas belum dibuka, maka arahkan ke --}}

  {{-- jika kelas sudah dibuka --}}
  {{-- check apakah user sudah memilih --}}
  {{-- jika belum memilih -> maka tampilkan list organisasi --}}
    @foreach ($komunitas as $data)
      <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="numbers" style="text-align:center">
                                <p>Komunitas #{{ $data->id }}</p>
                                {{ $data->nama }}
                            </div>
                        </div>
                    </div>
                        <hr />
                        <div class="row">
                          <div class="text-center">
                            <div class="col-xs-12">
                                 <a href="{{ url('/delegates/detail/komunitas/'.$data->id.'') }}" class="btn btn-info btn-sm"><i class="ti-search"></i> Selengkapnya</a>

                                  <a href="{{ url('/delegates/vote-organisasi/'.$data->id.'') }}" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- jika sudah memilih -> maka tampilkan tiket Organisasi yang sudah dipilih --}}
@endsection
