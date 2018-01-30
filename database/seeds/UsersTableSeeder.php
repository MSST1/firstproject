<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ],
      [
        'name' => 'TypicalUser',
        'email' => 'user@user.ru',
        'password' => bcrypt('typicaluser'),
        'role_id' => 2,
      ]);
    }
}
