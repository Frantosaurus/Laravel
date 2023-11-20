<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autors')->insert([
            ["jmeno"=>"Karel","prijmeni"=>"Čapek"],
            ["jmeno"=>"Josef","prijmeni"=>"Čapek"],
            ["jmeno"=>"Božena","prijmeni"=>"Němcová"],]
        );
    }
}
