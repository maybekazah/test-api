<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RoleEnum;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

// админ создается первый с айдишником 1

        \App\Models\User::query()->updateOrCreate([
            'name' => '123',
            'email' => '123@123.com',
            'password' => Hash::make('123123'),
        ]);

// таблица ролей заполнение
        $roles = RoleEnum::values();
        foreach ($roles as $role) {
            Role::query()->firstOrCreate(['type' => $role]);
        }

// запись в таблице user_roles, присваеваем роль админу
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 3
        ]);

        \App\Models\User::factory(10)->create();

        Post::factory(10)->create();
    }
}
