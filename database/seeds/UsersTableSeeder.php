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
        factory(\App\User::class,1)->states('admin')->create([
            'email' => 'admin@admin.com'
        ]);
        //Criar um usuario que não ´é admin
        factory(\App\User::class,1)->states('user')->create([
            'email' => 'user@user.com'
        ]);

        //Criar mais 3 usuarios não admin com email aleatório
        factory(\App\User::class,3)->states('user');
    }
}
