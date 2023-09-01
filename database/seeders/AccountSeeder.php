<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'first_name'=>'boybe',
            'last_name'=>'anaye',
            'username'=>'secretary',
            'email'=>'secretary@gmail.com',
            'password'=>Hash::make('iloveyou'),
            'type'=> "secretary",
        ]);

        
    }
}
