<?php

use Illuminate\Database\Seeder;

class AddRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'user',
                'description' => 'default user',
            ],
            [
                'id' => 228,
                'name' => 'admin',
                'description' => 'main administrator',
            ],

        ]);
    }
}
