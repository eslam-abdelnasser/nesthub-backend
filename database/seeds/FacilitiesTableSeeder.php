<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $facilities = [
            [ 'name' => '24hr Access',         'type' => '0'],
            ['name' => 'Disabled Access',      'type' => '0'],
            [ 'name' => 'Furniture',           'type' => '0'],
            [ 'name' => 'Inventory Storage',   'type' => '0'],
            [ 'name' => 'Mailing Address',     'type' => '0'],
            [ 'name' => 'Meeting Rooms',       'type' => '0'],
            [ 'name' => 'Phone Booths',        'type' => '0'],
            [ 'name' => 'Printing',            'type' => '0'],
            [ 'name' => 'Reception',           'type' => '0'],
            [ 'name' => 'Secure Access',       'type' => '0'],
            [ 'name' => 'Trading Address',     'type' => '0'],
            [ 'name' => 'Utilities',           'type' => '0'],
            [ 'name' => 'Wifi',                'type' => '0'],
            [ 'name' => 'Cleaning',            'type' => '0'],
            [ 'name' => 'Breakout Space',      'type' => '0'],

            //Additional Facilities
            [ 'name' => 'Childcare',           'type' => '1'],
            [ 'name' => 'Bike Storage',        'type' => '1'],
            [ 'name' => 'Cafe',                'type' => '1'],
            [ 'name' => 'Beer & Wine',         'type' => '1'],
            [ 'name' => 'Coffee & Tea',        'type' => '1'],
            [ 'name' => 'Event Space',         'type' => '1'],
            [ 'name' => 'Events & Talks',      'type' => '1'],
            [ 'name' => 'Fruit & Snacks',      'type' => '1'],
            [ 'name' => 'Gym',                 'type' => '1'],
            [ 'name' => 'Kitchen',             'type' => '1'],
            [ 'name' => 'Lockers',             'type' => '1'],
            ['name' => 'Parking',              'type' => '1'],
            ['name' => 'Pets Allowed',         'type' => '1'],
            ['name' => 'Roof Terrace',         'type' => '1'],
            ['name' => 'Showers',              'type' => '1']
        ];



        //Adding The Array
        for($i=0 ; $i<sizeof($facilities) ; $i++){
            DB::table('facilities')->insert($facilities[$i]);
        }

    }
}
