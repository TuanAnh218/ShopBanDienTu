<?php

use Illuminate\Database\Seeder;

class Admin_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'SupperAdmin',
            'email' => 'anhtom2004@gmail.com',
            'password' => bcrypt('1212123'),
        ]);
    }
}
