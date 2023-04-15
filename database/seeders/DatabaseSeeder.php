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
        // \App\Models\User::factory(10)->create();
        $this->call(ArticlesSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(FAQsSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
