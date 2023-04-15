<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
               'name' => 'Administrator',
               'email' => 'administrator@cloudlethr.com',
               'password' => 'admin' 
            ]
        );

        for($i=0; $i < count($users); $i++){
            User::updateOrCreate(["email" => $users[$i]['email']],
            [
                "name" => $users[$i]['name'],
                "email" => $users[$i]['email'],
                "password" => bcrypt($users[$i]['password'])
            ]);
        }
    }
}
