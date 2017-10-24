@php $mychoice = DB::table('kelas_workshop')
                  ->crossJoin('users')
                  ->where('users.id', $isChoosen->id)
                  ->where('kelas_workshop.id', $isChoosen->kelas_id)
                  ->first();
      flash('Kamu telah memilih kelas '.$mychoice->nama_kelas.'')->success();
    @endphp

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="card card-user">
      <div class="image">
          <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="{{ $mychoice->nama_kelas }}">
      </div>
          <div class="author">
            <img class="avatar border-gray" src="{{ $mychoice->gambar_logo }}" alt="{{ $mychoice->nama_kelas }}">
            <h4 class="title">{{ $mychoice->nama_kelas }}<br>
              <small>{{ $mychoice->email }}</small>
            </h4>

          </div>
          <hr>
					<p class="description text-left" style="padding:2em;">
              Berikut E-Ticket kamu :<br><br>
							<i class="ti-star"></i> <strong>D-{{ $mychoice->id }}-FLS</strong><br>
							<i class="ti-user"></i> <strong>{{ $mychoice->name }}</strong> <br>
              <i class="ti-agenda"></i> <strong>{{ $mychoice->nama_kelas }}</strong> <br>
							<i class="ti-location-pin"></i> <strong>{{ $mychoice->ruang_kelas }}</strong> <br>
							<br>Agar kamu bisa mengikuti kelas workshop, Tunjukan E-Ticket ini kepada Rangers yang bertugas ya.
          </p><br>
  </div>
</div>
