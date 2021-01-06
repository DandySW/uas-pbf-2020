<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Dandy Satrio',
            'email'     => 'admin@kshop.com',
            'password'  => '$2y$10$MHOZOEJHdvW3xhTYr2UXtOwIlavapj/GXROUKMqhd3tjvcxdetcRO', //password
            'isAdmin'   => '1',
        ]);
        User::create([
            'name'         => 'Dewi Fitria Chantika',
            'email'        => 'demo@gmail.com',
            'password'     => '$2y$10$LequIjEItEmIU/cuTkJakukPV8aKuXpYfXm/kpDTQrjPzZnOgWDKq', //123456
            'address'      => 'Jalan raya tengah jalan no 5C',
            'city_id'      => '133',
            'province_id'  => '11',
            'postcode'     => '68121',
            'phone_number' => '081234567890',
            'isAdmin'      => '0',
        ]);
    }
}
