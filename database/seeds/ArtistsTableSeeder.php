<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // prevent db error from key constraint when refresh seeder
        DB::statement('SET foreign_key_checks=0');
        DB::table('artists')->truncate();
        DB::statement('SET foreign_key_checks=1');

        $artists = [
            ['name' => 'Peck Palitchoke', 'gender' => 'male', 'year_debut' => 2002],
            ['name' => 'Off Pongsak', 'gender' => 'gay', 'year_debut' => 2004],
            ['name' => 'Ice Saranyu', 'gender' => 'female', 'year_debut' => 2006]
        ];

        foreach ( $artists as $artist ) {
            DB::table('artists')->insert($artist);
        }
    }
}
