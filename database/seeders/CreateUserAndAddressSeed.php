<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Fernandinha Quilici",
            "email" => "fernandaquilici@gmail.com",
            "password" => Hash::make("1234")
        ]);
        //
        DB::table('addresses')->insert([
            "address" => "Rua das Gaivotas, 333"
        ]);
    }
}
