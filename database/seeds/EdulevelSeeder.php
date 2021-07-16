<?php

use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
        [
            'name'=>'Sd sederajat',
            'desc'=>'SD/MI',  
        ],
        [
            'name'=>'Smp sederajat',
            'desc'=>'smp / mts', 
        ]  
        ]);
    }
}
