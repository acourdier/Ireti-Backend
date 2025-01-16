<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'Admin',
            'email' => 'shakaibishfaq1@gmail.com',
            'phone'=>"03000000000",
            'username' => 'admin',
            'password' => Hash::make('AZERTY'),
            'city'=> 'Daska',
            'role' => '0',
            'country' => 'Pakistan',

        ]);
        User::create([
            'fname' => 'Sullivan Joubert',
            'email' => 'Sullivan.joubert@ireticapital.com',
            'phone'=>"03100000000",
            'username' => 'Sullivan Joubert',
            'password' => Hash::make('AZERTY'),
            'city'=> 'sialkot',
            'role' => '0',
            'country' => 'Pakistan',

        ]);
        User::create([
            'fname' => 'Gabriel Olugbenga',
            'email' => 'Gabriel.olugbenga@ireticapital.com',
            'phone'=>"03200000000",
            'username' => 'Gabriel Olugbenga',
            'password' => Hash::make('AZERTY'),
            'city'=> 'sialkot',
            'role' => '0',
            'country' => 'Pakistan',

        ]);
        User::create([
            'fname' => 'Trading Ireticapital',
            'email' => 'trading@ireticapital.com',
            'phone'=>"03200000000",
            'username' => 'Trading Ireticapital',
            'password' => Hash::make('AZERTY'),
            'city'=> 'sialkot',
            'role' => '0',
            'country' => 'Pakistan',

        ]);
    }

}
