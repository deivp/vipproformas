<?php

use Illuminate\Database\Seeder;
use App\Payment;
use App\User;

class paySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_a = User::where('email','david@gmail.com')->value('id');

        Payment::create([
        	'user_id'=>$user_a,
        	'price'=>'10',
        	'voucher'=>'a1234',
        	'status'=>'1',
        ]);

        $user_b = User::where('email','silvia@gmail.com')->value('id');

        Payment::create([
        	'user_id'=>$user_b,
        	'price'=>'10',
        	'voucher'=>'b4321',
        	'status'=>'1',
        ]);
    }
}
