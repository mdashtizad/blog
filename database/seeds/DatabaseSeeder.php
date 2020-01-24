<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'farshad',
            'email' => 'farshadfakhar@gmail.com',
            'password' => 'adadwad'
        ]);
        User::create([
            'name' => 'farshad',
            'email' => 'farshadfakhar1@gmail.com',
            'password' => 'adadwad'
        ]);
        User::create([
            'name' => 'farshad',
            'email' => 'farshadfakha2r@gmail.com',
            'password' => 'adadwad'
        ]);
    }
}
