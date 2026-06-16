<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsAndRolesSeeder extends Seeder
{
    public function run(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // CREATE PERMISSIONS
        $permissions = [
            'view-any Permission', 'view Permission', 'create Permission',
            'update Permission', 'delete Permission', 'force-delete Permission', 'restore Permission',

            'view-any Role', 'view Role', 'create Role',
            'update Role', 'delete Role', 'force-delete Role', 'restore Role',

            'view-any User', 'view User', 'create User',
            'update User', 'delete User', 'force-delete User', 'restore User',

            'view-any Divisi', 'view Divisi', 'create Divisi',
            'update Divisi', 'delete Divisi', 'force-delete Divisi', 'restore Divisi',
            'delete-any Divisi', 'restore-any Divisi', 'replicate Divisi', 'reorder Divisi', 'force-delete-any Divisi',

            'view-any Jabatan', 'view Jabatan', 'create Jabatan',
            'update Jabatan', 'delete Jabatan', 'force-delete Jabatan', 'restore Jabatan',
            'delete-any Jabatan', 'restore-any Jabatan', 'replicate Jabatan', 'reorder Jabatan', 'force-delete-any Jabatan',

            'view-any Pegawai', 'view Pegawai', 'create Pegawai',
            'update Pegawai', 'delete Pegawai', 'force-delete Pegawai', 'restore Pegawai',
            'delete-any Pegawai', 'restore-any Pegawai', 'replicate Pegawai', 'reorder Pegawai', 'force-delete-any Pegawai',

            'view-any Training', 'view Training', 'create Training',
            'update Training', 'delete Training', 'force-delete Training', 'restore Training',

            'view-any JenisTraining', 'view JenisTraining', 'create JenisTraining',
            'update JenisTraining', 'delete JenisTraining', 'force-delete JenisTraining', 'restore JenisTraining',

            'view-any PegawaiTraining', 'view PegawaiTraining', 'create PegawaiTraining',
            'update PegawaiTraining', 'delete PegawaiTraining', 'force-delete PegawaiTraining', 'restore PegawaiTraining',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // CREATE ROLES
        $adminRole   = Role::firstOrCreate(['name' => 'Admin']);
        $managerRole = Role::firstOrCreate(['name' => 'Manager']);
        $staffRole   = Role::firstOrCreate(['name' => 'Staff']);

        $adminRole->givePermissionTo(Permission::all());

        // CREATE USERS (skip kalau sudah ada)
        if (!User::where('email', 'admin@mail.com')->exists()) {
            User::create([
                'name'              => 'Admin',
                'is_admin'          => true,
                'email'             => 'admin@mail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
            ])->assignRole($adminRole);
        }

        if (!User::where('email', 'budi@mail.com')->exists()) {
            User::create([
                'name'              => 'Budi',
                'is_admin'          => false,
                'email'             => 'budi@mail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
            ])->assignRole($managerRole);
        }

        if (!User::where('email', 'dedi@mail.com')->exists()) {
            User::create([
                'name'              => 'Dedi',
                'is_admin'          => false,
                'email'             => 'dedi@mail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
            ])->assignRole($staffRole);
        }
    }
}