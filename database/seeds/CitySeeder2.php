<?php

use Illuminate\Database\Seeder;

class CitySeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([ 'geoname_id'=> '1546102', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'TF', 'country_name'=> 'French Southern Territories', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> 'Port-aux-FranÃ§ais', 'metro_code'=> '', 'time_zone'=> 'Indian/Kerguelen', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '1546748', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'TF', 'country_name'=> 'French Southern Territories', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> '', 'metro_code'=> '', 'time_zone'=> '', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '1547314', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'HM', 'country_name'=> 'Heard Island and McDonald Islands', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> '', 'metro_code'=> '', 'time_zone'=> 'Indian/Kerguelen', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '3371123', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'BV', 'country_name'=> 'Bouvet Island', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> '', 'metro_code'=> '', 'time_zone'=> 'Europe/Oslo', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '3426466', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'GS', 'country_name'=> 'South Georgia and the South Sandwich Islands', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> 'Grytviken', 'metro_code'=> '', 'time_zone'=> 'Atlantic/South_Georgia', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '3474415', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'GS', 'country_name'=> 'South Georgia and the South Sandwich Islands', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> '', 'metro_code'=> '', 'time_zone'=> 'Atlantic/South_Georgia', 'is_in_european_union'=> false, ]);
        DB::table('cities')->insert([ 'geoname_id'=> '6697173', 'locale_code'=> 'en', 'continent_code'=> 'AN', 'continent_name'=> 'Antarctica', 'country_iso_code'=> 'AQ', 'country_name'=> 'Antarctica', 'subdivision_1_iso_code'=>'', 'subdivision_1_name'=> '', 'subdivision_2_iso_code'=>'', 'subdivision_2_name'=> '', 'city_name'=> 'Antarctica', 'metro_code'=> '', 'time_zone'=> '', 'is_in_european_union'=> false, ]);

    }
}
