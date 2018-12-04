<?php

use Illuminate\Database\Seeder;

class IndexColumnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Http\Model\IndexColumn::class,7)->create();
    }
}
