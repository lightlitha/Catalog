<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $attributes = [
            [
                'name' => $faker->name,
                'email' => 'admin@phiscus.com',
                'email_verified_at' => date("Y-m-d h:i:sa", strtotime('today')),
                'password' => Hash::make('phiscus')
            ],
            [
                'name' => $faker->name,
                'email' => 'editor@phiscus.com',
                'email_verified_at' => date("Y-m-d h:i:sa", strtotime('today')),
                'password' => Hash::make('phiscus')
            ]
        ];

        foreach ($attributes as $key => $value) {
            $attribute = new User();
            $attribute->name = $value['name'];
            $attribute->email = $value['email'];
            $attribute->email_verified_at = $value['email_verified_at'];
            $attribute->password = $value['password'];
            $attribute->save();
          }
    }
}
