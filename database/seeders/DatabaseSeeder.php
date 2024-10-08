<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'truenormis',
            'password' => Hash::make('root'),
        ]);
        City::factory()->count(10)->has(
            Store::factory(5)->has(
                Product::factory()->count(5)
            )
        )->create();
    }
}
