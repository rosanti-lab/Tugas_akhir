<?php

use Illuminate\Database\Seeder;
use App\Courier;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        ['code' => 'jne', 'title' => 'JNE'],
        ['code' => 'j&t', 'title' => 'J&T'],
        ['code' => 'sicepat', 'title' => 'SICEPAT']
        ];
        Courier::insert($data);

    }
}
