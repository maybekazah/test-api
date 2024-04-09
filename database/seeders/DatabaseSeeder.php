<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'user',
             'email' => 'user@user.com',
             'password' => Hash::make('password'),
         ]);

        $roles = RoleEnum::values();
        foreach ($roles as $role) {
            Role::query()->firstOrCreate(['type' => $role]);
        }

    }
}
