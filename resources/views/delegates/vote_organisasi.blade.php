@extends('layouts.master')

@section('title','Vote Organisasi/Komunitas Pilihanmu.')

@section('content')

  @if ($isChoosen->komunitas_id == null)
    {{-- informasi flashdata --}}
    @php
      flash('Kamu hanya diberikan 1 kesempatan untuk melakukan <b>Vote Komunitas Favoritmu</b>, jadi perhatikan pilihanmu.')->warning();
    @endphp
    {{-- show list komunitas --}}
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

                                  <a href="{{ url('pilih/komunitas') }}" onclick="event.preventDefault(); document.getElementById('vote-{{ $data->id }}').submit();" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
            {{-- form post --}}
            <form id="vote-{{ $data->id }}" action="{{ url('pilih/komunitas') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="user" value="{{ $isChoosen->id }}">
                <input type="hidden" name="komunitas_id" value="{{ $data->id }}">
            </form>
        </div>
    @endforeach
  @else
    @include('delegates.tiket.komunitas');
  @endif

@endsection
