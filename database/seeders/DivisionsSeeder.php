<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the divisions table
        DB::table('divisions')->insert([
            [
                'division_name' => 'AFC North',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'AFC South',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'AFC West',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'AFC East',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'NFC North',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'NFC South',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'NFC West',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'division_name' => 'NFC East',
                'superbowl_titles_in_division' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
