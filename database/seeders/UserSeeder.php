<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();
        DB::table('roles')->delete();

        Role::create(['name' => 'admin']);

        $admin = User::create([
            'name' => 'Panel admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $admin->assignRole('admin');
    }
}
