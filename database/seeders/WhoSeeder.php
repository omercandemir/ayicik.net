<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Who::factory(3)->create();

    }
}
