<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      for($i = 1; $i <= 100; $i++){
        $name = array_rand(['fahri', 'ari', 'fakhri', 'ihwan', 'ikhwan', 'iwan']);
        DB::table('users')->insert([
          'name' => $name,
          'email' => $name.rand()."@gmail.com",
          'email_verified_at' => now(),
          'password' => bcrypt('password'),
          'remember_token' => Str::random(10),
          'role' => 'user'
        ]);
      }
      for ($i = 1; $i <= 500; $i++){
        DB::table('contents')->insert([
          'title' => 'Example '.$i,
          'slug' => 'Example_'.$i,
          'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ea quo perferendis accusantium ex natus voluptatibus. Expedita, temporibus reiciendis voluptates assumenda ipsum vel, sed sapiente a nisi cupiditate alias minima.',
          'user_id' => User::where('role', '!=', 'admin')->random()->id
        ]);
      }
      DB::table('users')->insert([
        'name' => 'Admin Blog',
        'email' => 'admin@blog.com',
        'email_verified_at' => now(),
        'password' => bcrypt('admin'),
        'remember_token' => Str::random(10),
        'role' => 'admin'
      ]);
    }
}
