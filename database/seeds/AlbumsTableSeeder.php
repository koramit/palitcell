<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
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
        DB::table('albums')->truncate();
        DB::statement('SET foreign_key_checks=1');

        $albums = [
            ['artist_id' => 1, 'name' => 'One Palitchoke', 'year_release' => 2005],
            ['artist_id' => 2, 'name' => 'Offering Love', 'year_release' => 2007],
            ['artist_id' => 3, 'name' => 'Ice Sarunyu', 'year_release' => 2006],
        ];

        foreach ( $albums as $album ) {
            DB::table('albums')->insert($album);
        }
    }
}
