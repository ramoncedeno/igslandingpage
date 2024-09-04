<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ListVicidialsSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('list_vicidials')->insert([
                'list_id' => rand(1, 100),
                'gmt_offset_now' => '+00:00',
                'called_since_last_reset' => 'N',
                'phone_code' => Str::random(3),
                'phone_number' => Str::random(10),
                'title' => Str::random(10),
                'first_name' => Str::random(10),
                'middle_initial' => Str::random(1),
                'last_name' => Str::random(10),
                'address1' => Str::random(10),
                'address2' => Str::random(10),
                'address3' => Str::random(10),
                'city' => Str::random(10),
                'state' => Str::random(10),
                'province' => Str::random(10),
                'postal_code' => Str::random(5),
                'country_code' => 'MX',
                'gender' => 'h',
                'date_of_birth' => now(),
                'alt_phone' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'security_phrase' => Str::random(10),
                'comments' => Str::random(50),
                'called_count' => rand(0, 10),
                'last_local_call_time' => now(),
                'rank' => rand(1, 10),
                'owner' => Str::random(10),
                'entry_list_id' => rand(1, 100),
                'time_stamp' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ]);
        }
    }
}
