<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Adminstrator';
        $user->role = 'ADMIN';
        $user->email = 'admin@sandbox.com';
        $user->password = Hash::make('adminpass');
        $user->save();

        $user = new User;
        $user->name = 'Alice';
        $user->role = 'CREATOR';
        $user->email = 'alice@wonderland.com';
        $user->password = Hash::make('eatmeplease');
        $user->save();

        user::factory()
            ->count(10)
            ->hasPosts(3)
            ->create();
    }
}
