<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->delete();

        $sql = file_get_contents(dirname(__DIR__, 1) . "/sql/countries.sql");
        DB::unprepared($sql);
    }
}