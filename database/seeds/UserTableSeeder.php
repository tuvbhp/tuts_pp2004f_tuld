<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
           'name' => 'Nathan',
            'email' => 'Nathan@email.com',
            'password' => bcrypt('yourPassword'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ],
        [
            'name' => 'David',
            'email' => 'David@email.com',
            'password' => bcrypt('yourPassword'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ],
        [
            'name' => 'Lisa',
            'email' => 'LIsa@email.com',
            'password' => bcrypt('yourPassword'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ],
        ]);
        }
}
