<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;



class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'manage hero',
            'manage extracurricular',
            'manage about',
            'manage teacher',
            'manage modul',
            'manage grade',
            'manage admission',
            'manage greeting',
            'manage principal',
            'manage facility',
            'manage history',
            'manage visionMission',
            'manage category',
            'manage blog'
        ];

        foreach ($permissions as $permission) {
            # code...
            Permission::firstOrCreate(['name'=> $permission]);
        }

        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        $user = User::firstOrCreate([
            'name' => 'admin',
            'email' => 'nefaoursi@smp.com',
            'password' => bcrypt('password123'),
        ]);

        $user->assignRole($superAdminRole);

    }
}
