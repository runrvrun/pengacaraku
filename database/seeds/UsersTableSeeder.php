<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'pengacaraku_admin',
            'email' => 'runrvrun@gmail.com',
            'password' => bcrypt('Pengacaraku4dm1n'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
