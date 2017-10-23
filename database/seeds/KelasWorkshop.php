<?php

use Illuminate\Database\Seeder;

class KelasWorkshop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kelas_workshop')->insert([

      [
        'nama_kelas' => 'Idea Development',
        'deskripsi' => 'Kelas ini bertujuan untuk menantang delegates bagaimana mereka dapat mengembangkan ide-idea yang selama ini mereka miliki agar menjadi suatu karya yang nyata.',
        'gambar_logo' => 'https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png',
        'ruang_kelas' => 'Gedung H.2.5',
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
      ],
      [
        'nama_kelas' => 'Content',
        'deskripsi' => 'Dalam kelas ini delegates akan diajarkan bagaimana cara mereka mengimplementasikan ide-ide yang mereka miliki ke dalam bentuk tulisan (content) yang efektif dan efisien untuk dapat disampaikan kepada masyarakat luas.',
        'gambar_logo' => 'https://user-images.githubusercontent.com/10141928/29752967-f924a25c-8b91-11e7-8bc9-e8186a8f4072.png',
        'ruang_kelas' => 'Gedung H.2.6',
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
      ]
    ]);
    }
}
