<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $files = glob(public_path('uploads/profiles/faker') . '/*.jpg');
        foreach ($files as $key => $value) {
          @unlink($value);
        }

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'image' => $faker->image($dir = public_path('uploads/profiles/faker'), $width = 400, $height = 400, $category = 'people', $fullPath = false, $randomize = false, $word = null),
            'level' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);

        factory(App\Models\User::class, 30)->create()->each(function ($user) {
          // $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
