<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'slug' => 'web-programming',
            'name' => 'Web Programming',
            'color' => 'blue'
        ]);

        Category::factory()->create([
            'slug' => 'desktop-programming',
            'name' => 'Desktop Programming',
            'color' => 'red'
        ]);

        Category::factory()->create([
            'slug' => 'android-programming',
            'name' => 'Android Programming',
            'color' => 'green'
        ]);

        Category::factory()->create([
            'slug' => 'ios-programming',
            'name' => 'IOS Programming',
            'color' => 'amber'
        ]);
    }
}
