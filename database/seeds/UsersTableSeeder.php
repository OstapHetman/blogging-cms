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
        $user = App\User::create([
            'name' => 'John Doe',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non tristique tortor. Donec sed nisl sed lacus mattis eleifend. Fusce eu convallis odio. Praesent eleifend ante a posuere rutrum. Phasellus malesuada finibus erat ac commodo. Donec elit quam, dapibus vehicula eleifend eu, aliquet eu dolor',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
        ]);
    }
}
