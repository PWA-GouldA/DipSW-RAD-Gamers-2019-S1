<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(GameTypeSeeder::class);
        $this->call(ManufacturersSeeder::class);
        $this->call(GamesSeeder::class);

        $this->call(Country::class);

        $this->call(CitySeeder1::class);
        $this->call(CitySeeder2::class);
        $this->call(CitySeeder3::class);
        $this->call(CitySeeder4::class);
        $this->call(CitySeeder5::class);
        $this->call(CitySeeder6::class);
        $this->call(CitySeeder7::class);
        $this->call(CitySeeder8::class);
        $this->call(CitySeeder9::class);
        $this->call(CitySeederA::class);
        $this->call(CitySeederB::class);
        $this->call(CitySeederC::class);
        $this->call(CitySeederD::class);
        $this->call(CitySeederE::class);
        $this->call(CitySeederF::class);
        $this->call(CitySeederG::class);
        $this->call(CitySeederH::class);
        $this->call(CitySeederI::class);
        $this->call(CitySeederJ::class);
        $this->call(CitySeederK::class);
        $this->call(CitySeederL::class);
        $this->call(CitySeederM::class);
        $this->call(CitySeederN::class);
        $this->call(CitySeederO::class);
        $this->call(CitySeederP::class);
        $this->call(CitySeederQ::class);
        $this->call(CitySeederR::class);
//        $this->call(CitySeederS::class);
//        $this->call(CitySeederT::class);
//        $this->call(CitySeederU::class);
//        $this->call(CitySeederV::class);
//        $this->call(CitySeederW::class);
//        $this->call(CitySeederX::class);
//        $this->call(CitySeederY::class);
//        $this->call(CitySeederZ::class);
        
    }
}
