<?php

use App\User;
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
            'name'     => "Malik Soban",
            'email'    => 'sobankhn4@gmail.com',
            'password' => bcrypt('Maliks0ban'),
            'role'     => 'master',
            'active'   => 1,
            'verified' => 1,
        ]);

//        factory(User::class, 5)->states('admin')->create();
//        factory(User::class, 2)->states('accountant')->create();
//        factory(User::class, 2)->states('librarian')->create();
//        factory(User::class, 3)->states('teacher')->create();
//        factory(User::class, 20)->states('student')->create();
    }
}
