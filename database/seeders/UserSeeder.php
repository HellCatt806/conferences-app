<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $employeeRole = Role::where('name', 'employee')->first();
        $clientRole = Role::where('name', 'client')->first();

        $admin = User::create([
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $admin->roles()->attach($adminRole);

        $employee = User::create([
            'name' => 'Employee',
            'surname' => 'User',
            'email' => 'employee@employee.com',
            'password' => Hash::make('password'),
        ]);
        $employee->roles()->attach($employeeRole);

        $client = User::create([
            'name' => 'Client',
            'surname' => 'User',
            'email' => 'client@client.com',
            'password' => Hash::make('password'),
        ]);
        $client->roles()->attach($clientRole);
    }
}