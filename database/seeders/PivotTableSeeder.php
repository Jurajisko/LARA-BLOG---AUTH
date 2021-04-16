<?php

namespace Database\Seeders;

use App\Models\Pivot;
use Illuminate\Database\Seeder;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pivot::factory(30)->create();
    }
}
