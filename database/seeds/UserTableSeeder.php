<?php

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
        //
        $user = \App\Http\Model\User::where('account','admin')->get();
        if(count($user)==0){
            $user = new \App\Http\Model\User();
            $user->account = "admin";
            $user->password = Hash::make('admin');
            $user->save();
        }

    }
}
