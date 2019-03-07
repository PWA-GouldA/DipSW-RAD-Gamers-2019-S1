<?php

use Illuminate\Database\Seeder;

class Manufacturers extends Seeder
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
            'name' => 'Kentucky Games',
            'city' => 'Gamesville',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Steve Jackson Games',
            'city' => 'Boston',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Sydney Six Games',
            'city' => 'Paramatta',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

    }
}
