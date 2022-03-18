<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'jean luc', 'email' => 'jeanluc@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'aristide mbala', 'email' => 'aristide@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'boris kom', 'email' => 'boriskom@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'franck fotso', 'email' => 'franckfotso@gmail.com', 'password' => Hash::make('1234')],
            ['name' => 'loic kamga', 'email' => 'loickamga@gmail.com', 'password' => Hash::make('1234')],
        );

        User::factory(10)->create();
    }
}
