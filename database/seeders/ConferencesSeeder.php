<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the conferences table
        DB::table('conferences')->insert([
            [
                'conference_name' => 'AFC',
                'conference_logo' => 'afc_logo.png',
                'superbowl_titles_in_conference' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'conference_name' => 'NFC',
                'conference_logo' => 'nfc_logo.png',
                'superbowl_titles_in_conference' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
