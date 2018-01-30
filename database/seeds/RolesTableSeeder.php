<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'role' => 'Superadmin',
          'description' => '(Allows all)',
      ],
      [
        'role' => 'User',
        'description' => '(Typical user)'  
      ]);
    }
}
