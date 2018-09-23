<?php

use Carbon\Carbon;
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
        //
        DB::table('users')->insert([
            'name' => 'Winnie Damayo',
            'email' => 'winnie131212592@gmail.com',
            'password' => bcrypt('password123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'template_id' => 1
        ]);
    }
}
