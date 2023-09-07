<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(is_null(User::where('email', 'admin@admin.com')->first())){
            User::factory()->admin()->withEmail('admin@admin.com')->withPassword('Mysecret1234$')->create();
        }
        User::factory(10)->create();
    }
}
