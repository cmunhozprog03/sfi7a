<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Rolle::where('name', 'admin')->first();
        $authosRole = Rolle::where('name', 'author')->first();
        $userRole = Rolle::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => hash::make('12345678')
        ]);
        $author = User::create([
            'name' => 'author User',
            'email' => 'author@autor.com',
            'password' => hash::make('12345678')
        ]);
        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authosRole);
        $user->roles()->attach($userRole);
    }
}
