<?php

namespace Database\Seeders;

use App\Helpers\Enums\RolesEnum;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = collect(RolesEnum::cases());
        $roles->each(fn($role) => Role::firstOrCreate(['name' => $role->value]));
    }
}
