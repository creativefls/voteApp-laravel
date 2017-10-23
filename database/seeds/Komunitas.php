<?php

use Illuminate\Database\Seeder;

class Komunitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('komunitas')->insert([

      [
        'nama' => 'Satoe Atap',
        'deskripsi' => 'Komunitas Satoe Atap merupakan salah satu komunitas di Semarang yang sejak awal didirikan memang untuk berbagi manfaat pada lingkungan. Hebatnya komunitas ini digagas oleh para mahasiswa. <br/><br/>Berbagai kegiatan bermanfaat telah dilaksanakan komunitas ini, terutama untuk mendidik anak-anak jalanan dan miskin kota. Diantaranya adalah Belajar bareng, kegiatan belajar rutin setiap hari Selasa dan Rabu di spot Jalan Seroja dan Tanggul Indah. <br/><br/>Ayo sekolah, bantuan pendaftaran dan kebutuhan sekolah formal. Anjangsana, kunjungan dan pendekatan terhadap keluarga adik binaan.',
        'gambar_logo' => 'https://user-images.githubusercontent.com/10141928/30117754-6021acaa-934b-11e7-9196-54fa9caa458a.png',
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
      ],
      [
        'nama' => 'Ayo Nandur',
        'deskripsi' => 'Berawal dari keresahan kami bahwa minat anak muda terhadap dunia pertanian semakin menurun, Ayo Nandur mulai bergerak, mengkampanyekan dan mengajak anak-anak muda untuk sedikit mengenal dunia pertanian. <br/><br/>Dimulai dari tanggal 3 Maret 2017, ayo nandur mulai tumbuh. Mengajak orang-orang untuk memulai menanam kembali, dengan menyediakan paket berkebun yang kami kemas agar lebih menarik, sehingga muncul keingintahuan bagaimana rasanya menaman dengan tangan kita sendiri.',
        'gambar_logo' => 'https://user-images.githubusercontent.com/10141928/30117757-631ce64a-934b-11e7-94c8-156028770062.png',
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
      ]
      
      ]);
    }
}
