<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThanhVienTableSeeder::class);
    }
}

class ThanhVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanh_viens')->insert([
        	['user'=>'user1','pass'=>Hash::make(123456),'level'=>1],
        	['user'=>'user2','pass'=>Hash::make(123456),'level'=>2],
        	['user'=>'user3','pass'=>bcrypt(123456),'level'=>2],
        ]);
    }
}