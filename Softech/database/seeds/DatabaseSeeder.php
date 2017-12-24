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
        // $this->call(UsersTableSeeder::class);

        DB::table('movie_actor')->insert([
            ['id' => '3', 'movie_id' =>'10','actor_id'=>'4'],
            ['id' => '4', 'movie_id' =>'11','actor_id'=>'5']

        ]);


    }
}
