<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Suburb;

class SuburbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suburbs')->delete();
        Suburb::create(['id' => '1','name' => 'Glenwood','active' => 1]);
        Suburb::create(['id' => '2','name' => 'Berea','active' => 1]);
        Suburb::create(['id' => '3','name' => 'Morningside','active' => 1]);


    }
}
