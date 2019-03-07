<?php

use Illuminate\Database\Seeder;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('manufacturers')->insert([
            'name' => 'Cravon Studios',
            'city' => 'Canberra',
            'country' => 'AU',
            'website' => 'http://cravonstudios.com',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Ventura Games',
            'city' => 'Marrickville',
            'country' => 'AU',
            'website' => 'http://www.ventura.com.au',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Good Games Publishing',
            'city' => 'Sydney',
            'country' => 'AU',
            'website' => 'http://cravonstudios.com',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Steve Jackson Games',
            'city' => 'Austin',
            'country' => 'US',
            'website' => 'http://www.sjgames.com',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Playroom Entertainment',
            'city' => 'Encino',
            'country' => 'US',
            'website'=>'http://playroomentertainment.com/',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Z-Man Games',
            'city' => 'Mahopac',
            'country' => 'US',
            'website'=>'https://www.zmangames.com',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

    }
}
