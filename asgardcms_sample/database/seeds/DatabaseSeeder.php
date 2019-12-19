<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PageTranslationsTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuTranslationTableSeeder::class);
        $this->call(MenuItemTableSeeder::class);
        $this->call(MenuItemTranslationTableSeeder::class);
        $this->call(BlogPostTableSeeder::class);
        $this->call(BlogPostTranslationTableSeeder::class);
    }
}
