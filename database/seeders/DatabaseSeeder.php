<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'Admin Blog',
          'email' => 'admin@blog.com',
          'email_verified_at' => now(),
          'password' => bcrypt('admin'),
          'remember_token' => Str::random(10),
          'role' => 'admin'
        ]);
        \App\Models\User::factory(100)->create();

        for ($i = 1; $i <= 500; $i++){
          DB::table('contents')->insert([
            'title' => 'Example '.$i,
            'slug' => 'Example_'.$i,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ea quo perferendis accusantium ex natus voluptatibus. Expedita, temporibus reiciendis voluptates assumenda ipsum vel, sed sapiente a nisi cupiditate alias minima.',
            'user_id' => User::where('role', '!=', 'admin')->random()->id;
          ]);
        }
        
    }
}
