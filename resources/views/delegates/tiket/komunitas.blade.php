@php $mychoice = DB::table('users')
                  ->join('komunitas', 'users.komunitas_id', '=', 'komunitas.id')
                  ->select('users.*', 'komunitas.*')
                  ->first();
     flash('Terima kasih telah berpatisipasi dalam Voting Komunitas terbaik')->success(); @endphp

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="card card-user">
      <div class="image">
          <img src="{{ $mychoice->gambar_logo }}" alt="{{ $mychoice->nama }}">
      </div>
          <hr>
					<p class="description text-left" style="padding:2em;">
            <i class="ti-user"></i> <strong>{{ $mychoice->name }}</strong> <br>
							<i class="ti-medall"></i> <strong>{{ $mychoice->nama }}</strong> <br>
							<br>Terima kasih {{ $mychoice->name }}, telah berpartisipasi dalam Voting Komunitas terbaik :)
              <div class="text-center">
                <a href="{{ url('/delegates/detail/komunitas/'.$mychoice->id.'') }}" class="btn btn-info btn-sm"><i class="ti-info-alt"></i> Tentang {{ $mychoice->nama }}</a>
              </div><br>
          </p>
  </div>
</div>
