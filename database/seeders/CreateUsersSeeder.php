<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'=>'aslan1',
               'email'=>'aslan1@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('aslan123'),
            ],
            [
               'name'=>'aslan2',
               'email'=>'aslan2@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('aslan123'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
