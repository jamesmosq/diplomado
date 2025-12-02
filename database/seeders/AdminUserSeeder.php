<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear el rol Admin (si no existe)
        $roleExists = DB::table('moonshine_user_roles')->where('name', 'Admin')->first();

        if (!$roleExists) {
            $roleId = DB::table('moonshine_user_roles')->insertGetId([
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $roleId = $roleExists->id;
        }

        // 2. Crear el usuario admin (si no existe)
        $userExists = DB::table('moonshine_users')->where('id', 1)->first();

        if (!$userExists) {
            DB::table('moonshine_users')->insert([
                'id' => 1,
                'moonshine_user_role_id' => $roleId,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password123'),
                'avatar' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
