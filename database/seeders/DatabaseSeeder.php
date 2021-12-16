<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user=User::create([
            'name' => 'Admin',
            'email' => 'admin@bjcss.in',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');
    }
}
