<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class]);
        $admin = User::factory()->create([
            'username' => 'teguhmad123',
            'name' => 'Teguh',
            'email' => 'test@example.com',
            'is_admin' => true
        ]);

        Post::factory(100)->recycle([
            Category::all(),
            $admin,
            User::factory(10)->create()
        ])->create();
    }
}
