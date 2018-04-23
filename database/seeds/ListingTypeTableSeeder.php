<?php

use Illuminate\Database\Seeder;

class ListingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ListingType::class, 10)->create();
    }
}
