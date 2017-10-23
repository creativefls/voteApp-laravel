@php $mychoice = DB::table('users')
                  ->join('menu_makan', 'users.makan_id', '=', 'menu_makan.id')
                  ->select('users.*', 'menu_makan.*')
                  ->first() @endphp

<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
  <div class="card card-user">
      <div class="image">
          <img src="{{ $mychoice->foto }}" alt="{{ $mychoice->nama }}">
      </div>
          <div class="author">
            <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29747027-e5da50a0-8b16-11e7-9a25-73e3dfa65363.png" alt="FLS #DaretoCrate">
            <h4 class="title">{{ $mychoice->nama }}<br>
              <small>{{ $mychoice->email }}</small>
            </h4>

          </div>
          <hr>
					<p class="description text-left" style="padding:2em;">
              Berikut E-Ticket kamu :<br><br>
							<i class="ti-star"></i> <strong>D-{{ $mychoice->id }}-FLS</strong><br>
							<i class="ti-user"></i> <strong>{{ $mychoice->name }}</strong> <br>
							<i class="ti-shopping-cart-full"></i> <strong>{{ $mychoice->nama }}</strong> <br>
							<br>Agar kamu bisa mendapatkan makanan pilihamu, Tunjukan E-Ticket ini kepada Rangers yang bertugas ya.
          </p><br>
  </div>
</div>
