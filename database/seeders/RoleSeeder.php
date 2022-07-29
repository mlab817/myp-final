<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'viewer',
            'reviewer',
            'approver',
            'encoder',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'label'=> $role,
            ]);
        }
    }
}