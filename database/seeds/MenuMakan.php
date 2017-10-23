<?php

use Illuminate\Database\Seeder;

class MenuMakan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menu_makan')->insert([
        [
          'nama' => 'Nasi Ayam Semarang',
          'deskripsi' => 'Salah satu kuliner wajib saat berkunjung ke Semarang adalah nasi ayamnya. Nasi ayam semarang ini mirip-mirip dengan nasi liwet khas kota Solo. Hanya mirip, tapi tidak sama. <br/><br/>Nasi ayam semarang ini merupakan sajian nasi putih yang terasa gurih karena dimasak dengan santan, yang disantap dengan suwiran daging ayam, sambal goreng labu siam dan krecek, tahu bacem atau tahu putih, dan telur pindang lalu diguyur dengan kuah santan. (Kalau nasi liwet disajikan kering tanpa siraman kuah). <br/><br/>Sayur labunya memiliki citarasa lebih pedas dan manis jika dibandingkan dengan sayur labu siam pada nasi liwet. Nasi ayam ini biasanya disajikan dengan alas daun pisang ataupun disajikan dengan menggunakan pincuk daun pisang.',
          'foto' => 'https://user-images.githubusercontent.com/10141928/30072851-db2b383c-9295-11e7-894a-173ff85e305d.png',
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
        ],
        [
          'nama' => 'Soto Ayam Semarang',
          'deskripsi' => 'Biarpun namanya sama-sama soto ayam, namun tiap daerah memiliki ciri-ciri khasnya masing-masing. Misalnya saja resep soto ayam kuah bening, kuah kuning kental. Kuah tersebut merupakan gaya memasak masyarakat Semarang saat membuat soto. <br/><br/>oleh karena itu resep masakan tradisional ini bisa kita sebut juga soto ala semarang.',
          'foto' => 'https://user-images.githubusercontent.com/10141928/30072849-d789a4fc-9295-11e7-8538-26958c51507a.png',
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),
        ]
    ]);
    }
}
