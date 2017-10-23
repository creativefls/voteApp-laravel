<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert admin
        DB::table('users')->insert([
          [
            'name' => 'Indra Kusuma',
            'email' => 'rangers@fls.com',
            'password' => bcrypt('rangers'),
            'role' => 'rangers',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
          ],
          [
            'name' => 'Delegates FLS',
            'email' => 'delegates@fls.com',
            'password' => bcrypt('delegates'),
            'role' => 'delegates',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
          ]
        ]);
    }
}
