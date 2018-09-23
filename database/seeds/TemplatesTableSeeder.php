<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('templates')->insert([
            'id' => 1,
            'description' => 'administrator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
