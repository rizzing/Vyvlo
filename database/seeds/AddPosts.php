<?php

use Illuminate\Database\Seeder;

class AddPosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        DB::table('posts')->insert([
            [
                'id' => 1,
                'name' => 'main',
                'heading' => 'The only app you’ll ever need',
                'title' => 'Vyvlo',
                'text' => '',
            ],
            [
                'id' => 2,
                'name' => 'blog',
                'heading' => 'Blog',
                'title' => 'Blog',
                'text' => '',
            ],
            [
                'id' => 3,
                'name' => 'help',
                'heading' => 'Help',
                'title' => 'Help',
                'text' => '',
            ],
            [
                'id' => 4,
                'name' => 'terms',
                'heading' => 'Terms of Use',
                'title' => 'Terms of Use',
                'text' => '',
            ],
            [
                'id' => 5,
                'name' => 'privacy',
                'heading' => 'Privacy policy',
                'title' => 'Privacy policy',
                'text' => '',
            ],

        ]);
    }
}
