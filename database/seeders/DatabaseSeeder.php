<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $this->call([
            FeaturesSeeder::class,
            WhoSeeder::class,
            SupportSeeder::class,
            FeedbackSeeder::class,
            BlogSeeder::class,
            SettingsSeeder::class,
            BlogCategorySeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
