<?php

use Illuminate\Database\Seeder;
use App\PropertyType;

class PropertyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->delete();
        PropertyType::create(['id' => '1','name' => 'House','active' => 1]);
        PropertyType::create(['id' => '2','name' => 'Flat','active' => 1]);

    }
}
