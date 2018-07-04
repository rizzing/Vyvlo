<?php

use Illuminate\Database\Seeder;

class AddAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id'=>1,
                'activated' => true,
                'role_id' => 228,
                'name' => 'John',
                'last_name' => 'Smith',
                'email' => 'admin@admin.com',
                'password' => bcrypt('qwe123qwe'),
                //
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ]);

    }
}
