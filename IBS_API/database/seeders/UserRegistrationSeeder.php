<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\UserRegistration;
class UserRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        foreach(range(1,10) as $value){
            $user=new UserRegistration();
            $user->insert([
                'name'=>$faker->name(),
                'email'=>$faker->email(),
                'password'=>'password'
            ]);

        }
    }
}
