<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\User;
use App\Models\Moderator;
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

        User::factory()->create([
            'role_id' => Moderator::factory(),
            'role_type' => Moderator::class,
            'first_name' => 'Ziad',
            'last_name' => 'Alnagar',
            'phone' => '1234',
            'username' => 'ziadalnagdev',
            'email' => 'admin@admin',
            'password' => 'passwordadmin',
        ]);

        Item::factory()->create([
            'category_id' => '1',
            'brand_id' => '1',
            'name' => 'rtx 4090',
            'specifications' => 'dimensions: 100 cm x 500 cm, quality: good',
            'description' => fake()->sentence(),
            'stock' => 500,
            'price' => 20,
            'state' => 1,
        ]);
    }
}
