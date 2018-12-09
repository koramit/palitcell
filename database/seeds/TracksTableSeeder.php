<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracksTableSeeder extends Seeder
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
        DB::table('tracks')->truncate();
        DB::statement('SET foreign_key_checks=1');

        $tracks = [
            ['album_id' => 1, 'name' => 'ไม่มีใครรู้', 'number' => 11],
            ['album_id' => 1, 'name' => 'ใจหนึ่งก็รัก อีกใจก็เจ็บ', 'number' => 4],
            ['album_id' => 1, 'name' => 'Just Say Good Night', 'number' => 7],
            ['album_id' => 2, 'name' => 'แทงข้างหลัง..ทะลุถึงหัวใจ', 'number' => 4],
            ['album_id' => 2, 'name' => 'ของที่เธอไม่รัก', 'number' => 1],
            ['album_id' => 2, 'name' => 'หารักใส่ตัว', 'number' => 9],
            ['album_id' => 3, 'name' => 'น้อยใจตัวเอง', 'number' => 8],
            ['album_id' => 3, 'name' => 'คนใจง่าย', 'number' => 1],
            ['album_id' => 3, 'name' => 'หมอนสองใบกับใจเหงาๆ', 'number' => 12],
        ];

        foreach ( $tracks as $track ) {
            DB::table('tracks')->insert($track);
        }
    }
}
