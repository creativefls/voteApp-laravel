<?php

use Illuminate\Database\Seeder;

class KelasBuka extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * Kelas Buka memiliki 3 fitur untuk membuka kelas
     * KW => Kelas Workshop
     *
     */
    public function run()
    {
        //
        DB::table('waktu_buka')->insert([
          [
            'kode_fitur' => 'KW',
            'is_buka' => '0',
            'deskripsi' => 'Kelas Workshop',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
          ],
          [
            'kode_fitur' => 'VK',
            'is_buka' => '0',
            'deskripsi' => 'Vote Komunitas',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
          ],
          [
            'kode_fitur' => 'MM',
            'is_buka' => '0',
            'deskripsi' => 'Menu Makan',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
          ]
        ]);
    }
}
